@extends('layouts.basic')
@section('content')
    <div class="bg-dark-1 min-h-screen w-full flex items-center justify-center">
        <div class="bg-dark-3 rounded-lg text-white p-12 shadow-md">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex justify-center pb-4">
                    <img src="/img/branding/vcc/logo-transparent.png" alt="VCC Logo" class="h-14">
                </div>
                <h1 class="text-xl font-bold pb-3">Sign in to your VCC account.</h1>
                <div class="mb-4">
                    <input class="shadow-inner focus:shadow rounded w-full py-2 px-3 placeholder-gray-400 bg-dark-4 focus:bg-dark-5 transition-all duration-75 outline-none" type="email" name="email" placeholder="E-mail address" autocomplete="email" required>
                </div>
                <div class="mb-4">
                    <input class="shadow-inner focus:shadow rounded w-full py-2 px-3 placeholder-gray-400 bg-dark-4 focus:bg-dark-5 transition-all duration-75 outline-none" type="password" name="password" placeholder="Password" autocomplete="current-password" required>
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 w-full p-3 rounded transition-all duration-100 mt-4 onclick-spinner" id="LoginSubmitBtn" data-loading-text="Signing In...">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 38 38" stroke="#fff" class="pr-2 hidden" id="LoginSubmitLoadingSVG">
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)" stroke-width="2">
                                    <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                                    <path d="M36 18c0-9.94-8.06-18-18-18">
                                        <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"/>
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span id="LoginSubmitBtnText">Sign In</span>
                    </div>
                </button>
            </form>
        </div>
    </div>    
@endsection
