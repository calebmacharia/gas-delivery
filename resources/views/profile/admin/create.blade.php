
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body class="max-w-5xl mx-auto mt-4">
    <div class="mx-auto max-w-5xl my-4 text-center">

        <h2 class="text-3xl font-bold tracking-md text-slate-800 sm:text-4xl">Tosha Gases</h2>
    </div>

    {{-- add product form --}}
<section class=" rounded-3xl bg-gray-800 mx-auto md ">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-800 dark:text-white">Add a new product</h2>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Product image</label>
                    <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="add an image" required="">
                </div>
                <div class="w-full ">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                    <select id="brand" name="brand" class="bg-gray-50 max-h-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select brand</option>
                        <option value="k_gas">k-gas</option>
                        <option value="shell_gas">shell-gas</option>
                        <option value="afrigas">afrigas</option>
                        <option value="progas">progas</option>
                        <option value="total_gas">total-gas</option>
                        <option value="lake_gas">lake-gas</option>
                        <option value="sea_gas">sea-gas</option>
                        <option value="dell_gas">dell-gas</option>
                    </select>

                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="sh" required="">
                </div>
                <div>
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                    <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select type</option>
                        <option value="refill">refill</option>
                        <option value="new_cylinder">new-cylinder</option>
                    </select>
                </div>
                <div>
                    <label for="size" class="block mb-2 text-sm font-medium text-white"> size</label>
                    <select id="size" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select size</option>
                        <option value="6kg">6kg</option>
                        <option value="13kg">13kg</option>
                        <option value="50kg">50kg</option>
                    </select>
                </div>

            </div>

  <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white
          rounded-lg bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
    Add product
</button>

        </form>
    </div>

  </div>
</div>
</section>
@endsection


