
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
<body>
    <nav class="bg-gray-800 fixed w-full p-4 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center text-white text-lg font-semibold">
                <img src="{{asset('images/ghi.jpg')}}" alt="Logo" class=" w-12 rounded-lg mr-2">
                <div class="capitalize">tosha gas delivery</div>
            </a>

            <!-- Mobile menu button -->
            <div class="block lg:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="!isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"></path>
                        <path v-else fill-rule="evenodd" clip-rule="evenodd" d="M11 19h12v-2H11v2zm0-7h12v-2H11v2zM3 6h18v-2H3v2z"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop menu items -->
            <div class="hidden lg:flex lg:items-center lg:w-auto" id="menu">
                <ul class="lg:flex items-center">
                    <li><a href="#" class="text-white hover:text-gray-400 px-4">Home</a></li>
                    <li><a href= "{{route('order.index')}}"class="text-white hover:text-gray-400 px-4">Order Now</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400 px-4">Privacy Policy</a></li>
                    <i class="fa-solid fa-cart-shopping text-white text-2xl"></i>
                    <li>



                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
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

<div class="bg-cover no-repeat bg-center  h-screen   flex items-center justify-center font-bold" style="  background-image: url('{{ asset('images/jota.png') }}')  ">
    <div class="text-center mt-10 ">
        <h1 class="text-5xl text-black font-extrabold text-black tracking-wide">Tosha Gas Delivery</h1>
        <p class="text-4xl
        text-black mt-10 font-extrabold subpixel-antialiased font-serif tracking-wide">ORDER COOKING GAS AND MORE!</p>
        <h1 class="text-2xl mt-6 text-black font-extrabold   text-black tracking-wide">Delivery within 30 minutes</h1>
        <button class="bg-blue-600 hover:bg-cyan-700 text-white font-extrabold tracking-wider text-lg mt-10 w-60 font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{route('order.index')}}">Order Now!</a>

          </button>
    </div>
    </div>
    <div class="bg-gray-100 min-h-screen p-4">
        <div class="container mx-auto pt-12 pb-10">
            <div class="w-20 mb-5 mx-auto"> <img src="{{asset('images/deli.png')}}" alt="Logo" class=" mx-auto rounded-lg mr-2"></div>
            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Why Use Tosha
            </h1>
            <p class="text-gray-700 text-lg text-center mb-12">
                With the adverse effects of Charcoal burning on the environment, Tosha's aim is to provide a portable,
                clean and efficient energy source (LPG) to the citizens of Nairobi so as to reduce on the use of charcoal fuel
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">CONVENIENT</h2>
                    <p class="text-gray-700">
                        Get to order your gas at the comfort of your home.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Free Delivery</h2>
                    <p class="text-gray-700">
                        We deliver your Orders right at
             your doorstep in under 30 minutes
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Genuine and Reliable</h2>
                    <p class="text-gray-700">
                        Get Genuine Gas from a trusted and
                       authorized agent
                    </p>
                </div>

            </div>
        </div>

    </div>
    <div class="flex flex-wrap w-100 bg-cyan-500 text-md mx-auto items-center space-x-4 p-4">
        <div class="flex space-x-4 w-full">
           <p class="text-sm"><i class="fa-solid fa-phone"> 0724444000</i></p>
            <p class="text-sm "><i class="fa-solid fa-clock"> Monday - Sunday(8:0 0 am - 7:0 0 pm)</i></p>
        </div>
        <div class="flex space-x-4 text-2xl">
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-solid fa-message"></i>

    </div>
</body>
</html>
