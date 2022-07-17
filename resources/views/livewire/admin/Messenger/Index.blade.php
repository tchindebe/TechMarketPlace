@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="px-4 py-6 bg-green-600 text-white opacity-75 font-bold mt-10 rounded-md">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="px-4 bg-red-600 text-white opacity-75 mt-10 py-6 font-bold rounded-md">{{ session('error') }}</div>
    @endif

    <div class="container mx-auto mt-5">
        <div class="min-w-full border rounded lg:grid lg:grid-cols-3">
            <div class="border-r border-gray-300 lg:col-span-1">
                <div class="mx-3 my-3">
                    <div class="relative text-gray-600">
                          <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 viewBox="0 0 24 24" class="w-6 h-6 text-gray-300">
                              <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                          </span>
                          <input type="search" class="block w-full py-2 pl-10 bg-gray-100 rounded outline-none" name="search"
                               placeholder="Search" required />
                    </div>
                </div>

                <ul class="overflow-auto h-[32rem]">
                    <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
                    <li>
                        @foreach($users as $users)
                            <a
                                href="{{route('admin.messenger.getBy.User', $users->username)}}"
                            class="flex items-center {{ Route::currentRouteName()=='admin.messenger.getBy.Use' ? 'text-gray-800' : '' }} px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">

                                @if($users->profile->logo)
                                    <img src="{{asset('storage') . '/' . $users->profile->logo}}" alt="username" class="object-cover w-10 h-10 rounded-full">
                                @endif
                                @if($users->profile->logo == null)
                                    @if($users->user_type == "Client")
                                        <img src="{{asset('assets/clientAsset/plugins/images/users/profile.jpg')}}" alt="username" class="object-cover w-10 h-10 rounded-full">
                                    @elseif($users->user_type != "Client")
                                        <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="username" class="object-cover w-10 h-10 rounded-full">
                                    @endif
                                @endif
                            <div class="w-full pb-2">
                                <div class="flex justify-between">
                                    <span class="block ml-2 font-semibold text-gray-600">{{$users->username}}</span>
                                    <span class="block ml-2 text-sm text-gray-600">
                                        @if(Cache::has('user-is-online-' . $users->id))
                                            <span class="text-green-600" style="font-size: 11px;">is online : {{ \Carbon\Carbon::parse($users->last_seen)->diffForHumans() }}</span>
                                        @else
                                            <span class="text-red-600" style="font-size: 11px;">is offline : {{ \Carbon\Carbon::parse($users->last_seen)->diffForHumans() }}</span>
                                        @endif
                                    </span>
                                </div>
                                <span class="block ml-2 text-sm text-gray-600">{{$users->user_type}}</span>
                            </div>
                        </a>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="hidden lg:col-span-2 lg:block">
                <div class="w-full">
                    <div class="relative flex items-center p-3 border-b border-gray-300">
                        <img class="object-cover w-10 h-10 rounded-full"
                             src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg" alt="username" />
                        <span class="block ml-2 font-bold text-gray-600">Emma</span>
                        <span class="absolute w-3 h-3 bg-green-600 rounded-full left-10 top-3">
              </span>
                    </div>
                    <div class="relative w-full p-6 overflow-y-auto h-[40rem]">
                        <p class="justify-content-center justify-center mt-3">
                            Select a user to start a conversation
                        </p>
                    </div>

                    <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                        </button>

                        <input type="text" placeholder="Message"
                               class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700"
                               name="message" required />
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                        </button>
                        <button type="submit">
                            <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
