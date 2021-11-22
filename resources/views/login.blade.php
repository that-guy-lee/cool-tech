@extends('layouts.layout')
@section('content')


<div class="content">
    <h1>Login</h1>
    <h3><a href={{url('/register')}}>Or Register</a></h3>

    <form action="/login" method="POST">
        @csrf

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password">

        <br>
        <br>

        <button type="submit">Login</button>
    </form>

</div>


@endsection
