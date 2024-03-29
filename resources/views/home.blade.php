@extends('layouts.app')
@section('content')
@parent
<div class="top-banner bg-cover bg-no-repeat text-white" style="min-height: 100vh;background-image: url('/img/bg/electrify-ngd.jpg');background-position-x: 48.9%; background-position-y: 50%;">
    <div class="flex items-center justify-items-center w-full min-h-screen bg-black/50">
        <div class="lg:mx-auto mx-6 text-center">
            <h1 class="text-4xl sm:text-6xl font-bold pb-2">It's going to be ⚡️</h1>
            <h2 class="text-md sm:text-2xl max-w-5xl text-gray-300">Let's electrify the world! Electric cars aren't just a vision anymore. They are reality! And it's time for us to deliver some awesome products for improving the all-electric experience furthermore.</h2>
            <div class="mt-4">
                <a href="https://nextgendrive.net/" class="text-gray-300 hover:text-white px-2"><i class="fas fa-globe fa-2x"></i></a>
                <a href="https://www.instagram.com/ngdrive/" class="text-gray-300 hover:text-white px-2"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-dark-1 text-white xl:px-44 lg:px-24 pb-24 pt-12" id="products">
    <h1 class="mx-auto text-center text-2xl sm:text-5xl pb-3 font-bold">Discover Our Products</h1>
    <hr class="border-gray-800 pb-5 sm:pb-8">
    <div class="product">
        <div class="sm:flex min-h-25vh">
            <div class="sm:flex-1 mx-5">
                <h1 class="mx-auto text-center text-2xl sm:text-3xl font-bold">VTCManager</h1>
                <p>
                    VTCManager is a fast, reliable tracker for Euro Truck Simulator 2 and American Truck Simulator.
                    The software makes it easier to manage virtual transport companies and adds other unique features to
                    the gaming experience.
                </p>
                <div class="mt-6">
                    <a href="https://vtcmanager.eu" target="_blank" class="inline-block">
                        <p class="bg-blue-700 hover:bg-blue-600 shadow-lg hover:shadow-blue-600/50 shadow-blue-700/50 rounded-lg font-bold py-2 px-4">
                            <i class="fa-solid fa-up-right-from-square mr-2"></i> View Product
                        </p>
                    </a>
                </div>
            </div>
            <a href="https://vtcmanager.eu" class="sm:flex-1 sm:h-auto h-72 bg-products-vtcm-home bg-cover bg-center mt-4 sm:mt-0">
            </a>
        </div>
    </div>
    <!-- <hr class="border-gray-800 mt-5 pb-5"> -->
</div>
@endsection
