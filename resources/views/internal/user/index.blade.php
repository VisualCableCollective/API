@extends('layouts.internal')
@section('content')
    @parent
    <div class="bg-dark-1">
        <div class="py-20">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-dark-3 rounded-xl text-white py-8">
                <table class="table-fixed w-full border border-slate-500">
                    <thead>
                    <tr>
                        <th class="border border-slate-600 p-2">Username</th>
                        <th class="border border-slate-600 p-2">Full Name</th>
                        <th class="border border-slate-600 p-2">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="border border-slate-700 p-2">{{$user->username}}</td>
                            <td class="border border-slate-700 p-2">{{$user->first_name}} {{$user->last_name}}</td>
                            <td class="border border-slate-700 p-2">{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->onEachSide(15)->links() }}
            </div>
        </div>
    </div>
@endsection
