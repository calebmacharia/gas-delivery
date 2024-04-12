<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css">

    <style>

        /* Add your CSS styles here */
        /* Navbar styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: whitesmoke; /* Set background color */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: black;
            color: white;
        }

        .header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        nav ul li {
            display: inline;
            margin-left: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
        }

        /* Other styles */
        body {
            font-family: Arial, sans-serif;
            background-color: black; /* Set background color */
            padding: 10px;
        }

        form {
            background-color: #ffff; /* Form background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow */
        }

        h2 {
            /* border: 2px solid #007bff; Blue border */
            padding: 10px;
            text-align: center;
            background-color: #fff;
        }

        table {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="int"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f0f0f0;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff; /* Blue button color */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        p {
            color: white; /* Gray text color */
            margin-top: 20px;

        }

        .success-message {
            background-color: green;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .hidden {
            display: none;
        }

    </style>
</head>
</html>
