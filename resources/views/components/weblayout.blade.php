<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-900">
            <div class="w-full mx-auto bg-white border-b ">
                <div x-data="{ open: false }" class="relative flex flex-col w-full p-5 mx-auto bg-white md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                  <div class="flex flex-row items-center justify-between lg:justify-start">
                    <a class="text-lg tracking-tight text-black uppercase focus:outline-none focus:ring lg:text-2xl" href="/">
                      <span class="lg:text-lg uppecase focus:ring-0 font-black flex">
                        <img src="images/home.jpg" alt="" class="w-20 h-12 rounded">
                        <span class="mt-2 ">Home</span>
                      </span>
                    </a>
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                      <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>
                  </div>
                  <nav :class="{'flex': open, 'hidden': !open}" class="flex-col mr-64 flex-grow hidden py-10 md:flex lg:py-0 md:justify-center md:flex-row">
                    <ul class="space-y-2 list-none md:space-y-0 md:items-center md:inline-flex">
                      <li>
                        <a href="contact" class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                          Contact
                        </a>
                      </li>
                      <li>
                        <a href="about" class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 hover:border-blue-500">
                          About
                        </a>
                      </li>
                      <li>
                        <a href="hobbies" class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                         Hobbies
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="education" class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                         Education
                          </span>
                        </a>
                      </li>
                    </ul>


                  </nav>
                  <div class="flex flex-row items-center justify-end lg:justify-end">
                    <a class="text-lg tracking-tight text-red-700 uppercase focus:outline-none focus:ring lg:text-2xl" href="/">
                      <span class="lg:text-lg uppecase focus:ring-0 font-black">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                      </span>
                    </a>
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                      <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>
                  </div>
                </div>



              </div>
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
    </body>
</html>
