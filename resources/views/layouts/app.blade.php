@extends('layouts.basic')
@section('before-content')
<div class="min-h-screen">
    @include("components.navbar")

    <!-- Page Heading -->
    {{--
    @auth
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endauth
    --}}

    <!-- Page Content -->
    <main>
@endsection

@section('after-content')
    </main>
@include("components.footer")
</div>
@stack('modals')

@livewireScripts
@endsection
