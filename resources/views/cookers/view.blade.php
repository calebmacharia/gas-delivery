<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookers List</title>
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

        th, td {
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
            display: block;
            clear: both;
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Cookers List</h1>
    @if(session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
    @endif
    <!-- Link to add a new cooker -->
    <a href="{{ route('cookers.create') }}">Add New Cooker</a>
    <!-- Table to display list of cookers -->
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Type</th>
                <th>Size</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cookers as $cooker)
                <tr>
                    <td><img src="{{ asset('cookersimages/bek0-50.png') }}" alt="Cooker Image"></td>
                    <td>{{ $cooker->brand }}</td>
                    <td>{{ $cooker->price }}</td>
                    <td>{{ $cooker->type }}</td>
                    <td>{{ $cooker->size }}</td>
                    <td class="actions">
                        <!-- Action buttons -->
                        <a class="view" href="#">View</a>
                        <a class="edit" href="{{route('cookers.edit',$cooker)}}">Edit</a>
                        <form action="{{ route('cookers.destroy', $cooker) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
