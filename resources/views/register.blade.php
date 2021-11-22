@extends('layouts.layout')
@section('content')

<div class=content>
    <h1>Register</h1>
    <h3><a href={{url('/login')}}>Or Login</a></h3>

    <form action="/register" method="POST">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <label for="status">Status:</label>
        <select name="status" id="status">

            <option value="writer">Writer</option>
            <option value="Admin">Admin</option>

        </select>

        <br>
        <br>

        <button type="submit">Register</button>
    </form>
</div>


@endsection
