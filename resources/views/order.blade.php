<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <nav class="bg-gray-800 fixed w-full p-4 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center text-white text-lg font-semibold">
                <img src="{{ asset('images/ghi.jpg') }}" alt="Logo" class=" w-12 rounded-lg mr-2">
                <div class="capitalize">tosha gas delivery</div>
            </a>

            <!-- Mobile menu button -->
            <div class="block lg:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="!isOpen" fill-rule="evenodd" clip-rule="evenodd"
                            d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"></path>
                        <path v-else fill-rule="evenodd" clip-rule="evenodd"
                            d="M11 19h12v-2H11v2zm0-7h12v-2H11v2zM3 6h18v-2H3v2z"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop menu items -->
            <div class="hidden lg:flex lg:items-center lg:w-auto" id="menu">
                <ul class="lg:flex items-center">
                    <li><a href="{{route('home.index')}}" class="text-white hover:text-gray-400 px-4">Home</a></li>
                    <li><a href= "#"class="text-white hover:text-gray-400 px-4">Order Now</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400 px-4">Privacy Policy</a></li>
                    <i class="fa-solid fa-cart-shopping text-white text-lg"></i>
                    <li>
                        <div class=" ">
                            @if (Route::has('login'))
                                <div class=" px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-lg text-cyan-400 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-lg text-cyan-400  underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-lg text-cyan-400 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                    </div>


                  </li>
                </ul>
            </div>
        </div>
    </nav>


    <script>
        // JavaScript to toggle the mobile menu
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("menu").classList.toggle("hidden");
        });
    </script>
    </div>


    <div class="bg-white ">

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="mx-auto max-w-2xl my-4 text-center">

                <h2 class="text-3xl font-bold tracking-md text-slate-800 sm:text-4xl">Tosha Gases</h2>
            </div>
            <div class="bg-white rounded-3xl my-5 p-4" >

                <div class="items-center  mt-5 mx-5 mx-auto">
                    <div class="mt-3 justify-center text-3xl mb-3 font-medium mr-2">Commodities</div>
                    <div class="flex ">

                        <button class="bg-gray-500 mr-2 hover:bg-gray-800 px-3 text-white font-bold py-2 px-4 rounded rounded-3xl transition duration-300 ease-in-out">
                            Gas
                          </button>

                     <button class="bg-gray-800 mr-2 hover:bg-blue-700 px-3 text-white font-bold py-2 px-4 rounded transition rounded-3xl duration-300 ease-in-out">
                            Cookers
                          </button>
                          <button class="bg-gray-800 mr-2 hover:bg-blue-700 px-3 text-white font-bold py-2 px-4 rounded rounded-3xl transition duration-300 ease-in-out">
                            Accessories
                          </button>



                    </div>
                </div>

                <div class="items-center mt-5 bg-gray-100 shadow-[0px_10px_1px_rgba(221,_221,_221,_1),_0_10px_20px_rgba(204,_204,_204,_1)] mx-3 px-10 py-5 rounded mx-3 mx-auto">
                    <button class="flex items-center justify-between space-x-2 p-3 rounded max-w-m">
                        <div> <i class="fa-solid fa-filter flex w-4"></i></div>
                        <div class="font-medium">filter items by</div>
                    </button>
                    <div class="mt-3 justify-center text-2xl mb-3 font-medium mr-2">Brands</div>
                    <div class="flex flex-wrap mx-auto">
                        <label for="Gas" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="Gas" name="brands" value="" />
                            <span class="ml-2 text-lg">k-gas</span>
                        </label>

                        <label for="brands" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands-entry" name="brands" value="Entry" @checked('Entry' == request('brands')) />
                            <span class="ml-2 text-lg">shell-gas</span>
                        </label>

                        <label for="brands" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands" name="brands" value="Senior" @checked('Senior' == request('brands')) />
                            <span class="ml-2 text-lg">afrigas</span>
                        </label>

                        <label for="brands-entry" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands-entry" name="brands" value="Entry" @checked('Entry' == request('brands')) />
                            <span class="ml-2 text-lg">pro-gas</span>
                        </label>

                        <label for="brands" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands" name="brands" value="Senior" @checked('Senior' == request('brands')) />
                            <span class="ml-2 text-lg">lake-gas</span>
                        </label>

                        <label for="brands-entry" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands-entry" name="brands" value="Entry" @checked('Entry' == request('brands')) />
                            <span class="ml-2 text-lg">sea-gas</span>
                        </label>

                        <label for="brands" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands" name="brands" value="Senior" @checked('Senior' == request('brands')) />
                            <span class="ml-2 text-lg">dell-gas</span>
                        </label>
                        <label for="brands" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="brands" name="brands" value="Senior" @checked('Senior' == request('brands')) />
                            <span class="ml-2 text-lg">total-gas</span>
                        </label>


                    </div>
                    <div class="mt-3 justify-center text-2xl mb-3 font-medium mr-2">Type</div>
                    <div class="flex flex-wrap mx-auto">
                        <label for="type" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="type" name="type" value="" />
                            <span class="ml-2 text-lg">refill</span>
                        </label>

                        <label for="type" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="type" name="type" value=""  />
                            <span class="ml-2 text-lg">new-cylinder</span>
                        </label>
                    </div>
                    <div class="mt-3 justify-center text-2xl mb-3 font-medium mr-2">size</div>
                    <div class="flex flex-wrap mx-auto">
                        <label for="size" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="size" name="size" value="" />
                            <span class="ml-2 text-lg">6kg</span>
                        </label>

                        <label for="size" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="size" name="size" value=""  />
                            <span class="ml-2 text-lg">13kg</span>
                        </label>

                        <label for="size" class="mb-1 mr-4 flex items-center">
                            <input type="radio" id="size" name="size" value=""  />
                            <span class="ml-2 text-lg">50kg</span>
                        </label>

                    </div>
                    <div class="flex mx-auto justify-between">
                    <button type="button" class="text-white  bg-gradient-to-r from-teal-400
                    via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none
                    focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 text-black py-2.5 text-center me-2 mb-2">filter</button>
                    </div>
                </div>








            </div>
            <div></div>
            <div class="grid grid-cols-1 mx-auto rounded-4xl bg-white p-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-3 gap-7">
                @foreach($data as $data)
                <a href="#" class="group bg-white rounded-6xl shadow-2xl shadow-[inset_-12px_-8px_40px_#46464620] rounded-2xl p-2">
                    <div
                        class="flex justify-center rounded h-60 mt-2 px-6 py-4 transition delay-10000   hover:p-5 ">
                        <img src="{{ asset('gasimage/' . $data->image) }}" alt="gasimage" class="rounded w-full   rounded-lg">

                    </div>
                    <div class="flex  justify-center">
                        <h3 class="mt-1 mr-3 text-lg font-bold text-gray-800">{{$data->brand}}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-800">sh{{$data->price}}</p>
                    </div>
                    <div class="flex  justify-center">
                        <h3 class="mt-1 mr-3 text-lg font-bold text-gray-800">{{$data->type}}</h3>
                        <p class="mt-1 text-lg font-medium text-rose-600">{{$data->size}}</p>
                    </div>
                    <div class="flex justify-center ">
                        <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 m-2 px-2 rounded-full">
                            Add to cart
                        </button>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
    </div>
    <div class="flex items-center justify-between  border-gray-200 bg-white px-4 py-3 sm:px-6">
        <div class="flex flex-1 justify-between sm:hidden">
          <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
          <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
          <div>
            <p class="text-sm text-gray-700">
              Showing
              <span class="font-medium">1</span>
              to
              <span class="font-medium">10</span>
              of
              <span class="font-medium">97</span>
              results
            </p>
          </div>
          <div>
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
              <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="sr-only">Previous</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
              <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
              <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
              <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
              <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
              <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="sr-only">Next</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
              </a>
            </nav>
          </div>
        </div>
      </div>


</body>
