<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app2.css') }}">
    </head>
    <body class="antialiased">
        <nav class="navbar-main fixed w-full">
            <div class="flex justify-between mx-auto max-w-screen-md py-2 items-center">
                <img src="/img/branding/vcc/logo-transparent.png" alt="VTCM logo" class="h-8">
                <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Products</a>
                <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    News</a>
                <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    About Us</a>
                <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Support</a>
                <a class="text-gray-300 text-sm hover:text-white transition-colors ease-out duration-200 flex" href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Login/Register</a>
            </div>
        </nav>
        <div class="top-banner bg-home-1 bg-cover text-white flex items-center justify-items-center" style="height: 100vh;">
            <div class="mx-auto text-center">
                <h1 class="text-3xl sm:text-6xl font-bold">The VisualCable Collective</h1>
                <h2 class="text-md sm:text-2xl">Powerful technology for the whole world.</h2>
            </div>
        </div>
        <div class="bg-dark-1 text-white xl:px-44 lg:px-24 pb-24">
            <h1 class="mx-auto text-center text-2xl sm:text-5xl py-3 font-bold">Discover Our Products</h1>
            <hr class="border-gray-800 pb-5 sm:pb-8">
            <div class="product sm:flex min-h-25vh">
                <div class="sm:w-1/2 mx-5">
                    <h1 class="mx-auto text-center text-2xl sm:text-3xl font-bold">VTCManager</h1>
                    <p>VTCManager is a fast, reliable tracker for Euro Truck Simulator 2 and American Truck Simulator. The software makes it easier to manage virtual transport companies and adds other unique features to the gaming experience.</p>
                </div>
                <div class="sm:w-1/2 sm:h-auto h-72 bg-products-vtcm-home bg-cover bg-center mt-4 sm:mt-0">
                </div>
            </div>
            <!-- <hr class="border-gray-800 mt-5 pb-5"> -->
        </div>
        <footer class="w-full bg-dark-3 text-white" style="min-height: 50vh;">
            <div class="mx-auto xl:max-w-6xl pt-12">
                <div class="flex flex-wrap justify-between px-6">
                    <div>
                        <h1 class="text-xl font-bold pb-3">Services & Products</h1>
                        <ul>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">VTCManager</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">VCC Cloud</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <h1 class="text-xl font-bold pb-3">Information</h1>
                        <ul>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Help & Support</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Service Status</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Privacy & Terms of Use</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Imprint</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold pb-3">About VCC</h1>
                        <ul>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">About us</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Team</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Jobs</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Newsroom</a>
                            </li>
                            <li class="my-1">
                                <a href="" class="text-gray-300 hover:text-white">Branding</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="border-dark-1 my-8">
                <p class="text-center text-gray-300">Copyright ©2020 | Made With ❤️ and ☕ by The VisualCable Collective</p>
                <div class="flex items-center justify-center pt-5">
                    <a href="" class="text-gray-300 hover:text-white px-2"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="" class="text-gray-300 hover:text-white px-2"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="" class="text-gray-300 hover:text-white px-2"><i class="fab fa-youtube fa-2x"></i></a>
                    <a href="" class="text-gray-300 hover:text-white px-2"><i class="fab fa-discord fa-2x"></i></a>
                </div>
            </div>
        </footer>
    </body>
</html>
