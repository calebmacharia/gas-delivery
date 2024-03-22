@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="max-w-3xl mx-auto mt-4">
    <div class="mx-auto max-w-2xl my-4 text-center">

        <h2 class="text-3xl font-bold tracking-md text-slate-800 sm:text-4xl">Tosha Gases</h2>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="bg-white rounded-3xl dark:bg-gray-800 mx-auto md ">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-12">
        <h2 class="mb-4 text-xl font-bold text-gray-800 capitalize dark:text-white">edit product</h2>
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-20  "> <img src="/gasimage/{{$data->image}}" alt="Logo" class=" mx-auto rounded-lg mr-2"><div class="text-white mt-2 text-sm capitalize font-semibold">old image</div></div>

                <div class="sm:col-span-2">
                    <label for="image" class="block mb-2 text-sm font-medium capitalize text-gray-800 dark:text-white">new image</label>
                    <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="add an image" required="">
                </div>
                <div class="w-full ">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                    <select id="brand" name="brand" class="bg-gray-50 max-h-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">{{$data->brand}}</option>
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
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">price</label>
                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value={{$data->price}} required="">
                </div>
                <div>
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                    <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">{{$data->type}}</option>
                        <option value="refill">refill</option>
                        <option value="new_cylinder">new-cylinder</option>
                    </select>
                </div>
                <div>
                    <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> size</label>
                    <select id="size" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">{{$data->size}}</option>
                        <option value="6kg">6kg</option>
                        <option value="13kg">13kg</option>
                        <option value="50kg">50kg</option>
                    </select>
                </div>

            </div>
            <button type="submit" class="inline-flex items-center px-5  py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                edit product
            </button>

            <div>

                <button type="submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Update Product</button>


            </div>
        </form>
    </div>

  </div>
</div>
  </section>
  @endsection
