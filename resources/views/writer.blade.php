@extends('layouts.layout')
@section('content')

<div class="content">
        
    <form method="POST" action="/logout">
        <h1>{{$_COOKIE["name"]}} - <a href={{url('/logout')}}>Log out</a></h1>
    </form>
</div>

<div class="content">

    <h2>New Post</h2>
    <form method="POST" action="/newpost">

        @csrf

        <input type="text" name="title" id="title" placeholder="Title" style="width:80%; height:30px">
        <br><br>
        <input type="text" name="category" id="category" placeholder="Category" style="width:40%; height:30px">
        <input type="text" name="tags" id="tags" placeholder="Tags (Comma seperated)" style="width:40%; height:30px">
        <br><br>

        <input type="text" name="article" id="article" placeholder="Body of your post" style="width:80%; height:300px">
        <br><br>
        <button type="submit">Post!</button>
    </form>


</div>


@endsection
