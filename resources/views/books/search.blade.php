{{-- /resources/views/books/search.blade.php --}}
@extends('layouts.master')

@section('title')
    Search
@endsection

@section('content')
    <h1>Search</h1>

    <form method='GET' action='/search'>

        <label for='searchTerm'>Search by title:</label>
        <input type='text' name='searchTerm' id='searchTerm' value=''>

        <input type='checkbox' name='caseSensitive'  >
        <label>case sensitive</label>

        <br>
        <input type='submit' class='btn btn-primary btn-small'>

    </form>
@endsection