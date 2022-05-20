@extends('layouts.basic')
@section('content')
    <div class="bg-dark-1 min-h-screen w-full flex items-center justify-center">
        <div class="bg-dark-3 rounded-lg text-white p-12 shadow-md max-w-md" x-data="{ recovery: false }">
            <form action="/two-factor-challenge" method="POST">
                @csrf
                <div class="flex justify-center pb-4">
                    <img src="/img/branding/vcc/logo-transparent.png" alt="VCC Logo" class="h-14">
                </div>
                <div class="mb-4">
                    <h1 class="text-lg font-bold pb-3" x-show="! recovery">Please confirm access to your account by entering the authentication code provided by your authenticator application.</h1>
                    <h1 class="text-lg font-bold pb-3" x-show="recovery">Please confirm access to your account by entering one of your emergency recovery codes.</h1>
                </div>
                <div class="mb-4" x-show="! recovery">
                    <input class="shadow-inner focus:shadow rounded w-full py-2 px-3 placeholder-gray-400 bg-dark-4 focus:bg-dark-5 transition-all duration-75 outline-none" type="text" inputmode="numeric" id="code" name="code" placeholder="Code" autocomplete="one-time-code" autofocus required>
                </div>

                <div class="mb-4" x-show="recovery">
                    <input class="shadow-inner focus:shadow rounded w-full py-2 px-3 placeholder-gray-400 bg-dark-4 focus:bg-dark-5 transition-all duration-75 outline-none" type="text" id="recovery_code" name="recovery_code" x-ref="recovery_code" placeholder="Recovery Code" autocomplete="one-time-code" autofocus required>
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
                        <button type="button" class="text-sm text-dark hover:text-white cursor-pointer focus:outline-none"
                                x-show="! recovery"
                                x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                            Use a recovery code
                        </button>

                        <button type="button" class="text-sm text-dark hover:text-white cursor-pointer focus:outline-none"
                                x-show="recovery"
                                x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                            Use an authentication code
                        </button>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
