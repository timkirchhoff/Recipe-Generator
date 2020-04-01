@extends('layouts.app')

@section('title')
    {{ $user->name }} - Home
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        <div class="container">
            <a href="{{ route('home') }}">Home</a>
        </div>
    </header>

    <!-- User Recipes -->
    <div id="main">
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">    
                    <h2>{{ $user->name }}'s Recipes</h2>
                    
                    @if ($recipes->count() > 0)
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="table-header">Title</th>
                                        <th class="table-header">Description</th>
                                        <th class="table-header"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recipes as $recipe)
                                        <tr>    
                                            <td>{{ $recipe->title }}</td>
                                            <td>{{ $recipe->description  }}</td>
                                            <td><a href="{{ route('recipes.edit', $recipe->id) }}" class="button small">Edit</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h3>You haven't added any recipes yet...</h3>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
