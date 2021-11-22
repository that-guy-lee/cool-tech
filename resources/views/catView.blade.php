@extends('layouts.layout')
@section('content')

<div class="content" style="text-align:center">
    <h1>Category: {{$posts[0]->catagory}}</h1>
</div>


@foreach($posts as $post)


<div class="content">

    <h2><a href="{{('/article/' . $post->id)}}">{{$post->title}}</a></h2>
    <p>{{\Illuminate\Support\Str::limit($post->article, 500)}}</p>

</div>

@endforeach


@endsection
