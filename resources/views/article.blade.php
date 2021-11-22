@extends('layouts.layout')
@section('content')

<div class="content">
	        
    <h1>{{$post->title}}</h1>
    <h2><a href="{{('/catView/' . $post->catagory)}}">{{$post->catagory}}</a> || 
            
    <?php

        //Take the "tags" string and split it into an array
        $tagString = $post->tags;
        $tagArray = (explode(",", $tagString));

        //Loop through each tag and add it

        foreach ($tagArray as $tag) {
            echo "<a href='/tagView/" . $tag . "'>" . $tag . ", </a>";
        }

    ?>
        
    </h2>


    <p>{{$post->article}}</p>
    <h3>Posted on: {{$post->created}}</h3>


</div>

@endsection
        
