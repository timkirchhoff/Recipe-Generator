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
                    @include('partials.flash')
                    <h2>{{ $user->name }}'s Recipes</h2>
                    
                    @if ($recipes->count() > 0)
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="table-header">Title</th>
                                        <th class="table-header">Description</th>
                                        <th class="table-header"></th>
                                        <th class="table-header"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recipes->sortBy('id') as $recipe)
                                        <tr>    
                                            <td>{{ $recipe->title }}</td>
                                            <td>{{ $recipe->description  }}</td>
                                            @if($recipe->trashed())
                                                <td></td>
                                                <td>
                                                    <form action="{{ route('recipes.restore', $recipe->id) }}" method="POST" id="restore-recipe-form">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="button small" id="restore-button">Restore</button>
                                                    </form>
                                                </td>
                                            @else
                                                <td><a href="{{ route('recipes.edit', $recipe->id) }}" class="button small">Edit</a></td>
                                                <td>
                                                    <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" id="delete-recipe-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="button small icon fa-trash" id="delete-button"></button>
                                                    </form>
                                                </td>
                                            @endif
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
