@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="px-4 py-6 bg-green-600 text-white opacity-75 font-bold mt-10 rounded-md">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="px-4 bg-red-600 text-white opacity-75 mt-10 py-6 font-bold rounded-md">{{ session('error') }}</div>
    @endif
    <div class="flex items-center justify-between my-4 mb-4 text-sm font-semibold text-purple-100">
        <div class="flex items-center">
        <span class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Payments shop') }} <span class="text-green-800 font-bold">({{$userPayments->count()}})</span>
        </span>
        </div>
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="p-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5" placeholder="Search for items">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-5">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Store name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transaction type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            payment ad
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($userPayments as $userPayments)
                        <tr class="bg-white border-b text-gray-700 hover:bg-gray-50 ">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $userPayments->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $userPayments->transaction_type }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $userPayments->created_at->format('D-M-Y') }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
