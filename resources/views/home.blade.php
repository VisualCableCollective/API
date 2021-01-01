@extends('layouts.app')
@section('content')
@parent
<div class="top-banner bg-home-1 bg-cover text-white flex items-center justify-items-center" style="height: 100vh;">
    <div class="mx-auto text-center">
        <h1 class="text-3xl sm:text-6xl font-bold">The VisualCable Collective</h1>
        <h2 class="text-md sm:text-2xl">Powerful technology for the whole world.</h2>
    </div>
</div>
<div class="bg-dark-1 text-white xl:px-44 lg:px-24 pb-24" id="products">
    <h1 class="mx-auto text-center text-2xl sm:text-5xl py-3 font-bold">Discover Our Products</h1>
    <hr class="border-gray-800 pb-5 sm:pb-8">
    <div class="product">
        <a href="https://vtcmanager.eu" class="sm:flex min-h-25vh">
            <div class="sm:w-1/2 mx-5">
                <h1 class="mx-auto text-center text-2xl sm:text-3xl font-bold">VTCManager</h1>
                <p>VTCManager is a fast, reliable tracker for Euro Truck Simulator 2 and American Truck Simulator. The software makes it easier to manage virtual transport companies and adds other unique features to the gaming experience.</p>
            </div>
            <div class="sm:w-1/2 sm:h-auto h-72 bg-products-vtcm-home bg-cover bg-center mt-4 sm:mt-0">
            </div>
        </a>
    </div>
    <!-- <hr class="border-gray-800 mt-5 pb-5"> -->
</div>
@endsection