@extends('layouts.app')

@section('title')
    {{ $user->name }} - Home
@endsection

@section('content')
    <h2>Welcome back {{ $user->name }}!</h2>
@endsection
