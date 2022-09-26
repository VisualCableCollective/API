@extends('layouts.app')
@section('content')
    @parent
    <div class="top-banner bg-sponsoring bg-cover bg-no-repeat text-white" style="min-height: 100vh;">
        <div class="flex items-center justify-items-center w-full min-h-screen bg-black/30">
            <div class="mx-auto text-center">
                <h1 class="text-3xl sm:text-6xl font-bold">Let's get that done together</h1>
                <h2 class="text-md sm:text-2xl">Sponsorship by the VisualCable Collective for every project.</h2>
            </div>
        </div>
    </div>
    <div class="bg-dark-1 text-white xl:px-44 lg:px-24 pb-24 pt-12" id="products">
        <p>
            We are excited to announce that from today we will offer the amazing possibility for every project to
            get a sponsorship with the VisualCable Collective. We would like to extend our range of projects we
            have participated in. There are many amazing projects and ideas out there we would like to support.
            <br/><br/>
            We are offering different kinds of support for these projects including financial support, software
            development, server hosting and management support.
        </p>
    </div>
@endsection
