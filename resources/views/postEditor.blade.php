@extends('layouts.layout')
@section('content')

<div class="content">

    <h2>{{$post->title}}</h2>

    <form method="POST" action="/updatePost">

        @csrf

        <input type="text" name="title" id="title" value="{{$post->title}}" style="width:80%; height:30px">
        <br><br>
        <input type="text" name="catagory" id="catagory" value="{{$post->catagory}}" style="width:40%; height:30px">
        <input type="text" name="tags" id="tags" value="{{$post->tags}}" style="width:40%; height:30px">
        <br><br>

        <input type="textarea" name="article" id="article" value="{{$post->article}}" style="width:80%; height:300px">
        <input type="hidden" name="id" id="id" value="{{$post->id}}">
        <br><br>
        <button type="submit">Update Post</button>
    </form>

    <form method="POST" action="/updatePost">
        @csrf
        <input type="hidden" name="delete" id="delete" value="{{$post->id}}">
        <button type="submit">Delete Post</button>
    </form>


</div>


@endsection