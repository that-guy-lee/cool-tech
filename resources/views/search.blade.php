@extends('layouts.layout')
@section('content')

<div class="content" style="text-align:center">
    <h1>Search</h1>
</div>

<div class="content" style="text-align:center">

    <h3>Enter either the article id, category, or a tag</h3>

    <form method="POST" action="/search">

        @csrf

        <label for="idSearch">Article ID:</label>
        <input type="number" name="idSearch" id="idSearch">

        <br>


        <label for="categorySearch">Category:</label>
        <input type="text" name="categorySearch" id="categorySearch">

        <br>


        <label for="tagSearch">Tag:</label>
        <input type="text" name="tagSearch" id="tagSearch">

        <br>

        <button type="submit">Search</button>
    </form>

</div>


@endsection
