@extends('layouts.layout')
@section('content')

<div class="content" style="text-align:center">
    <h1>Categories</h1>
</div>


<div class="content">


    @foreach($posts as $post)


        <h2><a href="{{('/catView/' . $post->catagory)}}">{{$post->catagory}}</a></h2>


    @endforeach


</div>




@endsection
