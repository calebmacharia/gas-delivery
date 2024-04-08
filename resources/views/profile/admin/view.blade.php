@extends('layouts.app')
@section('content')

{{-- Viewing the gases --}}

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
        @foreach($data as $item)
        <tr>
          <td class="px-6 py-4">
            <div class="flex items-center">
              <input id="hs-table-pagination-checkbox-{{ $loop->index }}" type="checkbox" class="form-checkbox h-4 w-4 text-green-600">
              <label for="hs-table-pagination-checkbox-{{ $loop->index }}" class="sr-only">Checkbox</label>
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $item->brand }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $item->type }}</td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $item->size }}</td>
          <td class="px-6 py-4 text-right">sh{{ $item->price }}</td>
          <td class="px-6 py-4 text-right">
            <img src="/gasimage/{{ $item->image }}" class="rounded-lg" style="max-width: 600px;
             max-height: 100px;">
          </td>
          <td class="px-3 py-4 text-right">
            <button type="button" class="inline-flex items-center px-3 py-1 border border-transparent
             text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-700
             focus:outline-none focus:border-red-700 focus:ring-red-300 disabled:opacity-50
             disabled:pointer-events-none">
              <a href="{{ url('/deletegas', $item->id) }}">Delete</a>
            </button>
          </td>
          <td class="px-3 py-4 text-right">
            <button type="button" class="inline-flex items-center px-3 py-1 border border-transparent
            text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700
            focus:outline-none focus:border-blue-700 focus:ring-blue-300 disabled:opacity-50
            disabled:pointer-events-none">
              <a href="{{ url('/editgas', $item->id) }}">Edit</a>
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
