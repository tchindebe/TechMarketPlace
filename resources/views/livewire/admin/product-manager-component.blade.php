
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
            {{ __('Products Management') }} <span class="text-green-800 font-bold">({{$allProducts->count()}})</span>
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
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5" placeholder="Search for items">
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-50">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Store
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sponsored
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($allProducts as $product)
                    <tr class="bg-white border-bhover:bg-gray-50 text-gray-900">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $product->name }}
                        </th>
                        <td class="w-4 p-4">
                            <img alt="image" class="img-responsive" style="width: 50px; height: 40px;" src="{{asset('storage') . '/' . $product->image}}">
                        </td>
                            <td class="px-6 py-4">
                                {{ $product->user->username }}
                            </td>
                        <td class="px-6 py-4">
                            Sliver
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->regular_price }}
                        </td>
                        <td class="px-6 py-4">
                            @if($product->sponsored == 1) <span class="text-green-600">Yes</span>    @endif
                            @if($product->sponsored != 1) <span class="text-red-600">No</span>    @endif
                        </td>
                        <td class="px-6 py-4">
                            {{$product->created_at->format('D-M-Y')}}
                        </td>
                        <td class="px-6 py-4 text-right flex">
                            @if($product->sponsored == 1)
                                <a href="{{route('product.ofsponsored', $product->id)}}" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <style>
                                                .eye-off {
                                                    animation: eye-off 2s infinite cubic-bezier(0.99, -0.1, 0.01, 1.02) alternate;
                                                    stroke-dashoffset: 100;
                                                    stroke-dasharray: 100;
                                                }

                                                @keyframes eye-off {
                                                    to {
                                                        stroke-dashoffset: 0;
                                                    }
                                                }
                                            </style>
                                            <path stroke="#0A0A30" stroke-width="1.5" d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z"/>
                                            <circle cx="12" cy="12" r="1.972" stroke="#0A0A30" stroke-width="1.5"/>
                                            <path class="eye-off" stroke="#265BFF" stroke-linecap="round" stroke-width="1.5" d="M18.514 5.487L5.487 18.514"/>
                                        </svg>
                                </a>
                            @endif
                            @if($product->sponsored != 1)
                                <a href="{{route('product.sponsored', $product->id)}}" class="">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes jello{0%,to{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,.75,1)}40%{transform:scale3d(.75,1.25,1)}50%{transform:scale3d(1.15,.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}}</style><path stroke="#0A0A30" stroke-width="1.5" d="M11.081 5.141c.347-.807 1.491-.807 1.838 0l1.274 2.97a1 1 0 00.828.601l3.218.295c.875.08 1.229 1.168.568 1.748l-2.43 2.13a1 1 0 00-.316.972l.714 3.152c.194.857-.732 1.53-1.487 1.08l-2.776-1.653a1 1 0 00-1.024 0l-2.776 1.653c-.755.45-1.681-.223-1.487-1.08l.715-3.152a1 1 0 00-.317-.973l-2.43-2.13c-.66-.579-.307-1.667.568-1.747l3.218-.295a1 1 0 00.828-.601l1.274-2.97z" style="animation:jello 1s both infinite cubic-bezier(.69,.34,.09,.6);transform-origin:center"/></svg>
                                </a>
                            @endif
                            <a href="{{route('product.delete', $product->id)}}" class="text-red-600 md:px-2">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes rotate-tr{0%{transform:rotate(0)}to{transform:rotate(20deg)}}</style><path fill="#0A0A30" d="M16.773 10.083a.75.75 0 00-1.49-.166l1.49.166zm-1.535 7.027l.745.083-.745-.083zm-6.198 0l-.745.083.745-.083zm-.045-7.193a.75.75 0 00-1.49.166l1.49-.166zm5.249 7.333h-4.21v1.5h4.21v-1.5zm1.038-7.333l-.79 7.11 1.491.166.79-7.11-1.49-.166zm-5.497 7.11l-.79-7.11-1.49.166.79 7.11 1.49-.165zm.249.223a.25.25 0 01-.249-.222l-1.49.165a1.75 1.75 0 001.739 1.557v-1.5zm4.21 1.5c.892 0 1.64-.67 1.74-1.557l-1.492-.165a.25.25 0 01-.248.222v1.5z"/><path fill="#265BFF" fill-rule="evenodd" d="M11 6a1 1 0 00-1 1v.25H7a.75.75 0 000 1.5h10a.75.75 0 000-1.5h-3V7a1 1 0 00-1-1h-2z" clip-rule="evenodd" style="animation:rotate-tr 1s cubic-bezier(1,-.28,.01,1.13) infinite alternate-reverse both;transform-origin:right center"/></svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class=" px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-5">
            {{ $allProducts->links() }}
        </div>

    </div>
</div>
@endsection
