<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>


<body>
    <div class="items-center mt-5 bg-blue-300 mx-3 p-2 rounded mx-3 mx-auto">
        <div class="flex flex-col space-y-2">
            {{-- <div class="font-medium">Filter items by</div> --}}
            <div>
                <label for="brands" class="block mb-1 text-lg">Brands</label>
                <select id="brands" name="brands" class="rounded-lg px-3 py-2 ">
                    <option value="">Select a brand</option>
                    <option value="Amaze">Amaze</option>
                    <option value="armaco">Armaco</option>
                    <option value="ariston">Ariston</option>
                    <option value="beko">Beko</option>
                    <option value="simfer">Simfer</option>
                    <option value="samsung">Samsung</option>
                    <!-- Add other brand options here -->
                </select>
            </div>
            <div>
                <label for="type" class="block mb-1 text-lg">Type</label>
                <select id="type" name="type" class="rounded-lg px-3 py-2">
                    <option value="">Select a type</option>
                    <option value="electric cooker">Electric cooker</option>
                    <option value="gas cooker">Gas cooker</option>
                    <option value="oven">Oven</option>
                    <!-- Add other type options here -->
                </select>
            </div>
            <div>
                <label for="size" class="block mb-1 text-lg ">Size</label>
                <select id="size" name="size" class="rounded-lg px-3 py-2">
                    <option value="">Select a size</option>
                    <option value="2 burner ">2 burner</option>
                    <option value="3 burner">3 burner</option>
                    <option value="4 burner">4 burner</option>
                    <option value="6 burner">6 burner</option>
                    <!-- Add other size options here -->
                </select>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-2 mx-auto rounded-2xl bg-gray-300 p-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-3 gap-7">
        @foreach($cookers as $cooker)
        <a href="" class="group bg-white  shadow-2xl shadow-gray-800/100 rounded-2xl p-2">
            <div
                class="flex justify-center rounded h-60 mt-2 transition delay-10000   hover:p-5 ">
                <img src="{{ asset('assets/cookersimages/bek0-50.png')  }}" alt="gasimage" class="rounded w-full   rounded-lg">

            </div>
            <div class="flex  justify-center">
                <h3 class="mt-1 mr-3 text-lg font-bold text-gray-800">{{$cooker->brand}}</h3>
                <p class="mt-1 text-lg font-medium text-gray-800">sh{{$cooker->price}}</p>
            </div>
            <div class="flex  justify-center">
                <h3 class="mt-1 mr-3 text-lg font-bold text-gray-800">{{$cooker->type}}</h3>
                <p class="mt-1 text-lg font-medium text-rose-600">{{$cooker->size}}</p>
            </div>
            <div class="flex justify-center ">
                <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full">
                    Add to cart
                </button>
            </div>
        </a>
        @endforeach

    </div>

</body>
</html>
