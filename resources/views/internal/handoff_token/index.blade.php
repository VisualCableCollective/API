@extends('layouts.internal')
@section('content')
    @parent
    <div class="bg-dark-1">
        <div class="py-20">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-dark-3 rounded-xl text-white py-8">
                <table class="table-fixed w-full border border-slate-500">
                    <thead>
                    <tr>
                        <th class="border border-slate-600 p-2">Service</th>
                        <th class="border border-slate-600 p-2">Tool</th>
                        <th class="border border-slate-600 p-2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($service_tools as $service_tool)
                        <tr>
                            <td class="border border-slate-700 p-2">{{$service_tool->service_name}}</td>
                            <td class="border border-slate-700 p-2">{{$service_tool->tool_name}}</td>
                            <td class="border border-slate-700 p-2">
                                <a type="button"
                                   href="{{route('internal.handoff_token.create', ["service" => $service_tool->service_id, "tool" => $service_tool->tool_id])}}"
                                   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" }}>
                                    Open
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
