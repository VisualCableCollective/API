@extends('layouts.app')
@section('content')
@parent
<div class="top-banner bg-home-2 bg-cover bg-no-repeat text-white" style="min-height: 100vh;">
    <div class="flex items-center justify-items-center w-full min-h-screen bg-black/30">
        <div class="mx-auto text-center">
            <h1 class="text-3xl sm:text-6xl font-bold">The VisualCable Collective</h1>
            <h2 class="text-md sm:text-2xl">Powerful & pioneering technology for the whole world.</h2>
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
