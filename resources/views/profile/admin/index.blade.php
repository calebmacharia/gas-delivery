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

<section class="bg-white rounded-3xl dark:bg-gray-800 mx-auto md ">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-800 dark:text-white">Add a new product</h2>
        <form action="{{url('/uploadgas')}}" method="post" enctype="multipart/form-data">
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
                    <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> size</label>
                    <select id="size" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select size</option>
                        <option value="6kg">6kg</option>
                        <option value="13kg">13kg</option>
                        <option value="50kg">50kg</option>
                    </select>
                </div>

            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Add product
            </button>
        </form>
    </div>

  </div>
</div>
  </section>
  <div class="overflow-hidden rounded rounded-lg mt-6">
    <table class="min-w-full mt-5divide-y divide-gray-200 dark:divide-gray-700">
      <thead class="bg-gray-50 dark:bg-gray-700">
        <tr>
          <th scope="col" class="py-3 px-4 pe-0">
            <div class="flex items-center h-5">
              <input id="hs-table-pagination-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
              <label for="hs-table-pagination-checkbox-all" class="sr-only">Checkbox</label>
            </div>
          </th>
          <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-cyan-200 uppercase">brand</th>
          <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-cyan-200 uppercase">type</th>
          <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-cyan-200 uppercase">size</th>
          <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-cyan-200 uppercase">price</th>
          <th scope="col" class="px-8 ml-8 py-3 text-end text-xs font-medium text-cyan-200 uppercase">image</th>
          <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-cyan-200 uppercase">Action</th>
          <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-cyan-200 uppercase">Action</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200 bg-gray-800 dark:divide-gray-700">
        @foreach($data as $data)
        <tr>
          <td class="py-3 ps-4">
            <div class="flex items-center h-5">
              <input id="hs-table-pagination-checkbox-1" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
              <label for="hs-table-pagination-checkbox-1" class="sr-only">Checkbox</label>
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$data->brand}}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->type}}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$data->size}}</td>
          <td class="px-6 py-4 whitespace-nowrap text-slate-200 text-end text-sm font-medium">sh{{$data->price}}</td>
          <td class="px-6 py-5 whitespace-nowrap text-slate-200 text-end text-sm font-medium"><img src="/gasimage/{{$data->image}}" class="rounded-lg"></td>
          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium"> <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent
            text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"><a href="{{url('/deletegas', $data->id)}}">delete</a></button>
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium"> <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent
              text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"><a href="{{url('/editgas', $data->id)}}">edit</a></button>
            </td>
        </tr>
@endforeach

      </tbody>

    </table>
  </div>
  <div class="py-1 px-4 ">
    <nav class="flex items-center space-x-1">
      <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10" aria-current="page">1</button>
      <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">2</button>
      <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">3</button>
      <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        <span class="sr-only">Next</span>
        <span aria-hidden="true">»</span>
      </button>
    </nav>
  </div>
