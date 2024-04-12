{{-- @extends('layouts.app')
@section('content')
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
            background-color: lightgreen;
            font-family: Arial,sans-serif;
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


<body>

    @if(session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
    @endif
    <!-- Link to add a new cooker -->
    {{-- <a href="{{ route('cookers.create') }}" style="display: block; width: 200px; margin: 20px auto; text-align: center; background-color:
     #007bff; color: #fff; padding: 10px; text-decoration: none; border-radius: 5px;">Add New Cooker</a> --}}
    <!-- Table to display list of cookers -->
    {{-- <table>
        <thead>
            <tr>
                <th>IMAGE</th>
                <th>BRAND</th>
                <th>PRICE</th>
                <th>TYPE</th>
                <th>SIZE</th>
                <th>ACTIONS</th>
                <th>ACTIONS</th> <!-- New column for separate actions -->
            </tr>
        </thead>
        <tbody>
            @foreach ($cookers as $cooker)
                <tr>
                    {{-- <td><img src="/cookersimages/{{ $cooker->image}}" alt="Cooker Image"></td> --}}
                    {{-- <td><img src="{{ asset('assets/cookersimages/bek0-50.png') }}" alt="Cooker Image"></td>
                    <td>{{ $cooker->brand }}</td>
                    <td>{{ $cooker->price }}</td>
                    <td>{{ $cooker->type }}</td>
                    <td>{{ $cooker->size }}</td>
                    <td class="actions">
                        <!-- Action buttons -->
                        {{-- <a class="view" href="#">View</a> --}}
                        {{-- <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block"
                        href="{{ route('cookers.edit', $cooker) }}">Edit</a>

                    </td>
                    <td>
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
@endsection   --}}





@extends('layouts.app')
@section('content')

{{-- Viewing the cokers --}}

<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
      <thead class="bg-green-100 text-green-900">
        <tr>
          <th scope="col" class="px-10 w-full py-3">
            <div class="flex items-center">
              <input id="hs-table-pagination-checkbox-all" type="checkbox" class="form-checkbox h-4 w-4 text-green-600">
              <label for="hs-table-pagination-checkbox-all" class="sr-only">Checkbox</label>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs uppercase">Brand</th>
          <th scope="col" class="px-6 py-3 text-left text-xs uppercase">Type</th>
          <th scope="col" class="px-6 py-3 text-left text-xs uppercase">Size</th>
          <th scope="col" class="px-6 py-3 text-right text-xs uppercase">Price</th>
          <th scope="col" class="px-6 py-3 text-right text-xs uppercase mx-auto-right">Image</th>
          <th scope="col" class="px-10 py-3 mr-5 text-right text-xs uppercase">Action</th>
          <th scope="col" class="px-10 py-3 mr-5 text-right text-xs uppercase">Action</th>
        </tr>
      </thead>

      <tbody class="bg-white divide-y divide-gray-700 dark:divide-gray-700">
        @foreach($cookers as $cooker)
        <tr>
          <td class="px-6 py-4">
            <div class="flex items-center">
              <input id="hs-table-pagination-checkbox-{{ $loop->index }}" type="checkbox" class="form-checkbox h-4 w-4 text-green-600">
              <label for="hs-table-pagination-checkbox-{{ $loop->index }}" class="sr-only">Checkbox</label>
            </div>
          </td>
          <td class="px-6 py-4  whitespace-nowrap ">{{ $cooker->brand }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $cooker->type }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $cooker->size }}</td>
          <td class="px-6 py-4 text-right">sh{{ $cooker->price }}</td>
           <td class="px-6 py-4 text-right-3px">

             <img src="{{ asset('assets/cookersimages/bek0-50.png') }}" class="rounded-lg" style="max-width: 900px;
             max-height: 100px;">
         </td>
        {{-- <td class="px-6 py-4 text-right">
   <div>
        <img src="/cookersimages/{{ $cooker->image }}" class="rounded-lg" style="max-width: 600px;
        max-height: 100px;">
    </div>

        </td> --}}

          <td class="px-1 py-1 text-center">
          <form action="{{ route('cookers.destroy', $cooker) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-flex items-center px-3 py-1 border border-transparent
                     text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-700
                     focus:outline-none focus:border-red-700 focus:ring-red-300 disabled:opacity-50
                     disabled:pointer-events-none mr-0">
                Delete
            </button>
         </form>
        </td>

          <td class="px-1 py-1 text-center">
            <button type="button" class="inline-flex items-center px-3 py-1 border border-transparent
            text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700
            focus:outline-none focus:border-blue-700 focus:ring-blue-300 disabled:opacity-50
            disabled:pointer-events-none">
              <a href="{{ route('cookers.edit', $cooker) }}">Edit</a>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

<div class="mt-4">
  <nav class="flex items-center justify-between">
    <button type="button" class="inline-flex items-center p-2 bg-gray-100 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
      Previous
    </button>
    <div>
      <button type="button" class="inline-flex justify-center w-8 h-8 bg-gray-200 text-sm font-medium text-gray-700 rounded-full hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">1</button>
      <button type="button" class="inline-flex justify-center w-8 h-8 bg-gray-200 text-sm font-medium text-gray-700 rounded-full hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">2</button>
      <button type="button" class="inline-flex justify-center w-8 h-8 bg-gray-200 text-sm font-medium text-gray-700 rounded-full hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">3</button>
    </div>
    <button type="button" class="inline-flex items-center p-2 bg-gray-100 text-sm font-medium text-gray-700 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
      Next
    </button>
  </nav>
</div>

@endsection

