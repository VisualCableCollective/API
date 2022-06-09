@extends('layouts.basic')
@section('content')
    <div class="bg-dark-1 min-h-screen w-full flex items-center justify-center">
        <div class="bg-dark-3 rounded-lg text-white p-12 shadow-md max-w-md">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex justify-center pb-4">
                    <img src="/img/branding/vcc/logo-transparent.png" alt="VCC Logo" class="h-14">
                </div>
                <h1 class="text-xl font-bold pb-3">Sign in to your VCC account.</h1>
                @error("email")
                <p class="text-red-500 pb-1">Incorrect credentials.</p>
                @enderror
                <div class="mb-4">
                    <input class="shadow-inner focus:shadow rounded w-full py-2 px-3 placeholder-gray-400 bg-dark-4 focus:bg-dark-5 transition-all duration-75 outline-none @error("email") border-2 border-red-500 @enderror" type="email" name="email" id="email-input" placeholder="E-mail address" autocomplete="email" required>
                </div>
                <div class="mb-4">
                    <input class="shadow-inner focus:shadow rounded w-full py-2 px-3 placeholder-gray-400 bg-dark-4 focus:bg-dark-5 transition-all duration-75 outline-none @error("email") border-2 border-red-500 @enderror" type="password" name="password" placeholder="Password" autocomplete="current-password" required>
                </div>
                <div class="mb-4 flex items-center justify-between text-dark text-sm">
                    <div class="inline-flex items-center pr-12">
                        <input type="checkbox" name="remember" class="form-checkbox h-5 w-5 text-blue-600" checked><span class="ml-2">Remember me</span>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 w-full p-3 rounded transition-all duration-100 mt-3 onclick-spinner" id="LoginSubmitBtn" data-loading-text="Signing In...">
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
                @if (Route::has('register'))
                <div class="mt-5 text-sm">
                    <p class="text-dark">Don't have a VCC account yet? <a class="text-white" href="{{route("register")}}">Sign Up</a></p>
                </div>
                @endif
            </form>
        </div>
    </div>
@endsection
