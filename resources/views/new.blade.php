{{-- /resources/views/books/new.blade.php --}}
@extends('layouts.master')

@section('title')
    New book
@endsection

@section('content')
    <h1>Add a new book</h1>

    <form method='POST' action='/books/new'>
        {{ csrf_field() }}

        <label for='title'>Title</label>
        <input type='text' name='title' id='title' value="{{ old('title') }}" ><br><br>
        <label for='publishedYear'>Published Year</label>
        <input type='text' name='PublishedYear' id='PublishedYear' value="{{ old('PublishedYear') }}"><br><br>
        <input type='submit' value='Add New Book'><br>
    </form>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    

@endsection