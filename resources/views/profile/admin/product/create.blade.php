<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            margin-bottom: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;

        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>


</head>
<body>

<h2>Create Product</h2>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('admin.products.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ old('description') }}</textarea><br>
        @error('description')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="{{ old('price') }}"><br>
        @error('price')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br>
        @error('image')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit">Create Product</button>
    </div>
</form>

</body>
</html>
