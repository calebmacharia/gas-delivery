<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cooker</title>
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
            background-color: lightblue;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="file"],
        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
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
    </style>
</head>
<body>
    <h1>Edit Cooker</h1>
    <!-- Form for editing the cooker -->
    <form action="{{ route('cookers.update', $cooker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT method for updating the record -->

        <!-- Display existing image -->
        <label for="current_image">Current Image:</label>
        <img src="{{ asset('storage/' . $cooker->image) }}" alt="Current Cooker Image">
        <br>

        <!-- Input fields for cooker details -->
        <label for="image">New Image:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <br>
        <!-- Display selected image -->
        <label for="selected_image">Selected Image:</label>
        <img id="displayImage" src="" alt="Selected Image">
        <br>

        <label for="brand">Brand:</label>
        <select id="brand" name="brand">
            <option value="amaze">Amaze</option>
            <option value="armaco">Armaco</option>
            <option value="ariston">Ariston</option>
            <option value="beko">Beko</option>
            <option value="simfer">Simfer</option>
            <option value="samsung">Samsung</option>

        </select>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $cooker->price }}">

        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="electric cooker">Electric Cooker</option>
            <option value="gas cooker">Gas Cooker</option>
            <option value="oven">Oven</option>

        </select>

        <label for="size">Size:</label>
        <select id="size" name="size">
            <option value="2 burner">2 Burner</option>
            <option value="3 burner">3 Burner</option>
            <option value="4 burner">4 Burner</option>

        </select>

        <!-- Submit button -->
        <button type="submit">Update Cooker</button>
    </form>

    <!-- JavaScript for displaying selected image -->
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('displayImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                document.getElementById('displayImage').src = '';
            }
        });
    </script>
</body>
</html>
