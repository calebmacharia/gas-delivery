@extends('layouts.app')
@section('content')


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            width: 50%;
            margin: 20px auto;
            background-color: black;
            text-decoration-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .alert {
         margin-top: 20px;
         padding: 15px;
         background-color: greenyellow;
         color: black;
         border: 1px solid #c3e6cb;
         border-radius: 5px;
         /* Add the following properties to ensure visibility */
         display: block;
         clear: both;
         width: 50%;
         margin: 0 auto;
         text-align: center;
        }
    </style>

        <title>Add User</title>

    <h1>Add User</h1>
    @if(session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Add</button>
    </form>

@endsection
