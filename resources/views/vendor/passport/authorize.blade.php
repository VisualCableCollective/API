@extends('layouts.basic')
@section('content')
    <div class="bg-dark-1 min-h-screen w-full flex items-center justify-center">
        <div class="bg-dark-3 rounded-lg text-white p-12 shadow-md max-w-sm">
            <div class="flex justify-center pb-4">
                <img src="/img/branding/vcc/logo-transparent.png" alt="VCC Logo" class="h-14">
            </div>
            <h1 class="text-xl pb-3"><strong>{{ $client->name }}</strong> is requesting permission to access your VCC account.</h1>
            @if (count($scopes) > 0)
                            <div >
                                    <p><strong>This application will be able to:</strong></p>

                                    <ul>
                                        @foreach ($scopes as $scope)
                                            <li>- {{ $scope->description }}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        @endif
            <div class="flex w-full justify-between mt-5">
                <form method="post" action="{{ route('passport.authorizations.approve') }}" class="flex-1 mr-2">
                    @csrf
    
                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <input type="hidden" name="auth_token" value="{{ $authToken }}">
                    <button type="button" class="bg-green-600 hover:bg-green-700 w-full p-3 rounded transition-all duration-100 onclick-spinner no-validation" id="AuthorizingSubmitBtn" data-loading-text="Authorizing...">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 38 38" stroke="#fff" class="pr-2 hidden" id="AuthorizingSubmitLoadingSVG">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(1 1)" stroke-width="2">
                                        <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                                        <path d="M36 18c0-9.94-8.06-18-18-18">
                                            <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"/>
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span id="AuthorizingSubmitBtnText">Authorize</span>
                        </div>
                    </button>
                </form>
                <form method="post" action="{{ route('passport.authorizations.deny') }}" class="flex-1 ml-2">
                    @csrf
                    @method('DELETE')
    
                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <input type="hidden" name="auth_token" value="{{ $authToken }}">
                    <button type="button" class="bg-red-600 hover:bg-red-700 w-full p-3 rounded transition-all duration-100 onclick-spinner no-validation" id="CancelingSubmitBtn" data-loading-text="Canceling...">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 38 38" stroke="#fff" class="pr-2 hidden" id="CancelingSubmitLoadingSVG">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(1 1)" stroke-width="2">
                                        <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                                        <path d="M36 18c0-9.94-8.06-18-18-18">
                                            <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"/>
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span id="CancelingSubmitBtnText">Cancel</span>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>    
@endsection