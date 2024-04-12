@extends('layouts.app')
@section('content')

<title>User List</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: whitesmoke;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    button {
        background-color: #ff0000;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    button:hover {
        background-color: #cc0000;
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
@if(session('success'))
<div class="alert">
    {{ session('success') }}
</div>
@endif

<h1>User List</h1>
<a href="{{ route('users.create') }}" style="display: block; width: 200px; margin: 20px auto; text-align: center; background-color:
    #007bff; color: #fff; padding: 10px; text-decoration: none; border-radius: 5px;">Add New User</a>
<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Email</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block" href="{{ route('users.edit', $user) }}">View</a></td>
            <td><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block" href="{{ route('users.edit', $user) }}">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
