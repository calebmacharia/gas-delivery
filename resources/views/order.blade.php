<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-/9ZVNkqgKoYtKQDyZxkfvBfQFsgPa5k19i+X9wyJ+8LIf+w+HH9KCTQxZT13X9ihuyJpDqZR7gkjfy0DXVD6Og=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('assets/css/pop.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <nav class="bg-gray-800 fixed w-full p-2 z-10">
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

            <ul class="flex items-center">

                <li><a href="{{ route('home.index') }}" class="text-white hover:text-gray-400 px-4">Home</a></li>
                <li><a href= "#"class="text-white hover:text-gray-400 px-4">Order Now</a></li>
                <li><a href="#" class="text-white hover:text-gray-400 px-4">Privacy Policy</a></li>

                <li>
                    <div class=" ">
                        @if (Route::has('login'))
                            <div class=" px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-lg text-cyan-400 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-lg text-cyan-400  underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-lg text-cyan-400 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>


                </li>
                <li>
                    <div class="hidden lg:flex lg:items-center lg:w-auto" id="menu">
                        <ul class="lg:flex items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary" data-toggle="dropdown">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                            </button>
                                            <li>
                                                <div class="dropdown-menu">
                                                    <div class="row total-header-section">
                                                        @php $total = 0 @endphp
                                                        @foreach ((array) session('cart') as $id => $details)
                                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                                        @endforeach
                                                        <div
                                                            class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                                            <p>Total: <span class="text-info">sh
                                                                    {{ $total }}</span></p>
                                                        </div>
                                                    </div>
                                                    @if (session('cart'))
                                                        @foreach (session('cart') as $id => $details)
                                                            <div class="row cart-detail">
                                                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                                    <img
                                                                        src="{{ asset('gasimage') }}/{{ $details['image'] }}" />
                                                                </div>
                                                                <div
                                                                    class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                                    <div class="flex ">
                                                                        <div class>{{ $details['brand'] }}</div>
                                                                        <div class="ml-2 "> /{{ $details['type'] }}/
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="price flex items-center text-lg mt-2 text-info"><span
                                                                            class="count">Quantity:{{ $details['quantity'] }}
                                                                        </span> <span class= "ml-2">
                                                                            <div class="font-bold flex">
                                                                                sh{{ $details['price'] }}</div>
                                                                        </span>

                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                            <a href="{{ route('cart') }}"
                                                                class="btn btn-primary btn-block">View all</a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </li>
            </ul>
        </div>
        </div>
    </nav>


    <div class="dropdown">
        <button type="button" class="btn btn-primary" data-toggle="dropdown">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
        </button>

        <script>
            // JavaScript to toggle the mobile menu
            document.getElementById("menu-toggle").addEventListener("click", function() {
                document.getElementById("menu").classList.toggle("hidden");
            });
        </script>
    </div>


    <div class="bg-white ">

        <div class="mx-auto max-w-2xl  px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="mx-auto max-w-2xl mt-2  text-center">

                <h2 class="text-3xl  m-3 font-bold tracking-md text-slate-800 sm:text-4xl">Tosha Gases</h2>
            </div>
            <div class="items-center mt-3 mb-3 flex  mx-5 mx-auto">

                <div class="mt-3 justify-center text-3xl mb-3 font-medium mr-2">Commodities:</div>
                <button class="bg-white mr-2 hover:bg-gray-200 text-gray-800 font-semibold py-2 px-4 border border-blue-200 rounded shadow">
                    GAS
                  </button>
                <div class="flex ">

                    <button class="bg-white mr-2 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Cookers
                      </button>

                      <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Accessories
                      </button>
                </div>


                </div>

                <div>

                    <div class="container-fluid mx-auto rounded-t-lg mr-10 ml-10 bg-gray-800 ">
                        <div class="row align-items-center justify-content-center">
                                            <div class="col-md-3 pt-4">
                                               <div class="form-group rounded">
                                                  <input type="text" id="textbox" name="textbox" placeholder="enter brand" class="form-control rounded border-2 border-gray-100 ">

                                               </div>
                                            </div>
                                            <div class="col-md-3 pt-4">
                                               <div class="form-group">
                                                  <select id="inputState" class="form-control">
                                                    <option selected>size</option>
                                                    <option>6kg</option>
                                                    <option>13kg</option>
                                                    <option>50kg</option>

                                                  </select>
                                               </div>
                                            </div>

                                            <div class="col-md-3 pt-4">
                                                <div class="form-group">
                                                  <select id="inputState" class="form-control">
                                                    <option selected>Type</option>
                                                    <option>refill</option>
                                                    <option>new-cylinder</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 pt-2 item-center">
                                               <button type="button" class="btn btn-primary btn-block">Search</button>
                                            </div>
                                        </div>
                    </div>

                <div
                    class="grid grid-cols-1 mx-auto  bg-gray-200 p-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-3 gap-7">
                    @foreach ($data as $data)
                        <div
                            class="group bg-white  shadow-2xl shadow-[inset_-12px_-8px_40px_#46464620]  p-2">
                            <div
                                class="flex justify-center rounded h-60 mt-2 px-6 py-4 transition delay-10000   hover:p-5 ">
                                <img src="{{ asset('gasimage/' . $data->image) }}" alt="gasimage"
                                    class="rounded w-full   rounded-lg">

                            </div>
                            <div class="flex  justify-center">
                                <h3 class="mt-1 mr-3 text-lg font-bold text-gray-800">{{ $data->brand }}</h3>
                                <p class="mt-1 text-lg font-medium text-gray-800">sh{{ $data->price }}</p>
                            </div>
                            <div class="flex  justify-center">
                                <h3 class="mt-1 mr-3 text-lg font-bold text-gray-800">{{ $data->type }}</h3>
                                <p class="mt-1 text-lg font-medium text-rose-600">{{ $data->size }}</p>
                            </div>
                            <div class="flex justify-center m-2 ">
                                <p class="btn-holder"><a href="{{ route('add_to_cart', $data->id) }}"
                                        class="btn btn-primary btn-block text-center" role="button">Add to cart</a>
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="flex items-center justify-between  border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                <a href="#"
                    class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                <a href="#"
                    class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
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
                        <a href="#"
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                        <a href="#" aria-current="page"
                            class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#"
                            class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                        <a href="#"
                            class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                        <a href="#"
                            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>


</body>
