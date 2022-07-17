@extends('layouts.app')

@section('content')
<div class="py-12">
    @if(session('success'))
        <div class="px-4 my-3 py-6 bg-green-600 text-white opacity-75 font-bold rounded-md">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="px-4 bg-red-600 text-white opacity-75 py-6 font-bold rounded-md">{{ session('error') }}</div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <div class="p-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5" placeholder="Search for items">
                    </div>
                </div>
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b d">
                        <th class="px-4 py-3">Client</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Created at</th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y ">
                    @foreach($users as $user)
                        @if($user->user_type != 'admin')
                            <tr class="text-gray-700 ">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $user->username }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $user->user_type }}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    @if($user->account_status == 'Pending')
                                        <span class="px-2 py-1 font-semibold leading-yellow text-yellow-700 bg-yellow-100 rounded-full ">
                                            Pending
                                        </span>
                                    @elseif($user->account_status == 'Approved')
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full ">
                                            Approved
                                        </span>
                                    @else
                                        <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full ">
                                            Disable
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$user->created_at}}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class=" relative inline-block text-left dropdown">
                                <span class="rounded-md shadow-sm"
                                ><button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                                         type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                        <span>Action</span>
                                        <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button
                                    ></span>
                                        <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                                            <div class=" right-0 w-26 mt-1 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                    <a href="{{route('status.update', ['id' => $user->id, 'status' => "Pending"])}}" tabindex="3" class="text-gray-700 flex justify-between w-full px-2 py-2 text-sm leading-5 text-left"  role="menuitem" >Pending</a>
                                                    <a href="{{route('status.update', ['id' => $user->id, 'status' => "Approved"])}}" tabindex="3" class="text-gray-700 flex justify-between w-full px-2 py-2 text-sm leading-5 text-left"  role="menuitem" >Approved</a>
                                                    <a href="{{route('status.update', ['id' => $user->id, 'status' => "Disable"])}}" tabindex="3" class="text-gray-700 flex justify-between w-full px-2 py-2 text-sm leading-5 text-left"  role="menuitem" >Disable</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .dropdown:focus-within .dropdown-menu {
                                            opacity:1;
                                            transform: translate(0) scale(1);
                                            visibility: visible;
                                        }
                                    </style>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t ">
                    {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
