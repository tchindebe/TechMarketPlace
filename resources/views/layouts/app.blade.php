<!DOCTYPE html>
<html  x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('assets/admin/css/tailwind.output.css')}}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('assets/admin/js/init-alpine.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{asset('assets/admin/js/charts-lines.js')}}" defer></script>
    <script src="{{asset('assets/admin/js/charts-pie.js')}}" defer></script>

</head>
<body>
<div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
        <div class="py-4 text-gray-500">
            <a class="ml-6 text-lg font-bold text-gray-800" href="#">Easy</a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    @if( Route::currentRouteName() == 'admin.dashboard')
                        <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.dashboard' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{route('admin.dashboard')}}">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <button class="inline-flex items-center focus:outline-none justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            @click="togglePagesMenu"
                            aria-haspopup="true">
                        <span class="inline-flex items-center">
                            <svg class="w-5 h-5"
                                 aria-hidden="true"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span class="ml-4">Users</span>
                        </span>
                        <svg class="w-4 h-4"
                             aria-hidden="true"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                    <template x-if="isPagesMenuOpen">
                        <ul x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.users.shop' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{ route('admin.users.shop') }}">
                                    <span class="ml-4">Shop Users</span>
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.users.service' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{ route('admin.users.service') }}">
                                    <span class="ml-4">Services Users</span>
                                </a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.users.customer' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{ route('admin.users.customer') }}">
                                    <span class="ml-4">Customer Users</span>
                                </a>
                            </li>
                        </ul>
                    </template>
                </li>
                <li class="relative px-6 py-3">
                    @if( Route::currentRouteName() == 'admin.products')
                        <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.products' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{route('admin.products')}}">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span class="ml-4">Products</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <span class="ml-4">Services</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-4">Messages</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                        <svg  class="w-5 h-5"
                              aria-hidden="true"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              viewBox="0 0 24 24"
                              stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="ml-4">Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Mobile sidebar -->
    <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
    >
        <div class="py-4 text-gray-500">
            <a class="ml-6 text-lg font-bold text-gray-800" href="#">
                Easy
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    @if( Route::currentRouteName() == 'admin.dashboard')
                        <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.dashboard' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{route('admin.dashboard')}}">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
{{--                <li class="relative px-6 py-3">--}}
{{--                    @if( Route::currentRouteName() == 'admin.users')--}}
{{--                        <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>--}}
{{--                    @endif--}}
{{--                    <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.users' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{ route('admin.users') }}">--}}
{{--                        <svg class="w-5 h-5"--}}
{{--                             aria-hidden="true"--}}
{{--                             fill="none"--}}
{{--                             stroke-linecap="round"--}}
{{--                             stroke-linejoin="round"--}}
{{--                             stroke-width="2"--}}
{{--                             viewBox="0 0 24 24"--}}
{{--                             stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ml-4">Users</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="relative px-6 py-3">
                    @if( Route::currentRouteName() == 'admin.products')
                        <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex items-center w-full text-sm font-semibold {{ Route::currentRouteName()=='admin.products' ? 'text-gray-800' : '' }} transition-colors duration-150 hover:text-gray-800" href="{{route('admin.products')}}">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span class="ml-4">Products</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <span class="ml-4">Services</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                        <svg class="w-5 h-5"
                             aria-hidden="true"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-4">Messages</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="#">
                        <svg  class="w-5 h-5"
                              aria-hidden="true"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              viewBox="0 0 24 24"
                              stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="ml-4">Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md">
            <div class="container flex items-center justify-between h-full px-6 mx-auto text-blue-600">
                <!-- Mobile hamburger -->
                <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-blue" @click="toggleSideMenu" aria-label="Menu">
                    <svg class="w-6 h-6"
                         aria-hidden="true"
                         fill="currentColor"
                         viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Search input -->
                <div class="flex justify-center flex-1 lg:mr-32">
                    <div class="relative w-full max-w-xl mr-6 focus-within:text-blue-500">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                            <svg class="w-4 h-4"
                                 aria-hidden="true"
                                 fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-blue-300 focus:outline-none focus:shadow-outline-blue form-input" type="text" placeholder="Search for projects" aria-label="Search"/>
                    </div>
                </div>
                <ul class="flex items-center flex-shrink-0 space-x-6">
                    <!-- Notifications menu -->
                    <li class="relative">
                        <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-blue" @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications" aria-haspopup="true">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                            </svg>
                            <!-- Notification badge -->
                            <span aria-hidden="true" class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full"></span>
                        </button>
                        <template x-if="isNotificationsMenuOpen">
                            <ul x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                @click.away="closeNotificationsMenu"
                                @keydown.escape="closeNotificationsMenu"
                                class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md">
                                <li class="flex">
                                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                        <span>Messages</span>
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                            13
                                        </span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                        <span>Sales</span>
                                        <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                                            2
                                        </span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                        <span>Alerts</span>
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <!-- Profile menu -->
                    <li class="relative">
                        <button class="align-middle rounded-full focus:shadow-outline-blue focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                                 alt=""
                                 aria-hidden="true"
                            />
                        </button>
                        <template x-if="isProfileMenuOpen">
                            <ul x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                @click.away="closeProfileMenu"
                                @keydown.escape="closeProfileMenu"
                                class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                                aria-label="submenu">
                                <li class="flex">
                                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                        <svg class="w-4 h-4 mr-3"
                                             aria-hidden="true"
                                             fill="none"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             stroke-width="2"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                        <svg class="w-4 h-4 mr-3"
                                             aria-hidden="true"
                                             fill="none"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             stroke-width="2"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800" href="#">
                                        <svg class="w-4 h-4 mr-3"
                                             aria-hidden="true"
                                             fill="none"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             stroke-width="2"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                        </svg>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                </ul>
            </div>
        </header>
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
