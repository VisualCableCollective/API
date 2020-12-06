@extends('layouts.basic')
@section('content')
<div class="min-h-screen bg-gray-100">
    @include("components.navbar")

    <!-- Page Heading -->
    @auth
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endauth

    <!-- Page Content -->
    <main>
        @yield('page-content')
    </main>
    @include("components.footer")
</div>

@stack('modals')

@livewireScripts
@endsection