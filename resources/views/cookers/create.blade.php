@extends('layouts.app')
@section('content')
    <title>Add Cooker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
            color: black; /* Set default text color to black */
        }

        h1 {
            text-align: center;
            margin-top: 40px; /* Increase margin-top for more space */
            padding: 40px; /* Increase padding for more space */
            color: black; /* Set text color to black */
            font-size: 36px; /* Increase font size */
            font-weight: bold; /* Make the font bold */
        }
        h2 {
            text-align: center;
            margin-top:20px;
            padding:10px;
            color: black;
            font-size:20px;

        }

        form {
            width: 50%;
            margin: 20px auto;
            background-color: grey;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white; /* Set text color to white */
        }

        input[type="file"],
        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: black; /* Change text color to black */
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
            color: white; /* Set text color to white */
        }
    </style>

</head>
<body>
    <h1>Tosha Gases</h1>
    @if(session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
    @endif
    <!-- Form for adding a new cooker -->
    <form action="{{ route('cookers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Add a new Cooker</h2>
        <!-- Input fields for cooker details -->
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/required">

        <label for="brand">Brand:</label>
        <select id="brand" name="brand">
            <option selected="">Select brand</option>
            <option value="amaze">Amaze</option>
            <option value="armaco">Armaco</option>
            <option value="ariston">Ariston</option>
            <option value="beko">Beko</option>
            <option value="simfer">Simfer</option>
            <option value="samsung">Samsung</option>
        </select>

        <label for="type">Type:</label>
        <select id="type" name="type">
            <option selected="">Select type</option>
            <option value="electric cooker">Electric Cooker</option>
            <option value="gas cooker">Gas Cooker</option>
            <option value="oven">Oven</option>
        </select>
        <label for="size">Size:</label>
        <select id="size" name="size">
            <option selected="">Select size</option>
            <option value="2 burner">2 Burner</option>
            <option value="3 burner">3 Burner</option>
            <option value="4 burner">4 Burner</option>
        </select>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price">

        <!-- Submit button -->
        <button type="submit">Add Cooker</button>
    </form>
@endsection
