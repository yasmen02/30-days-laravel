<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .triangle {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 20px 20px 0;
            border-color: transparent #1a202c transparent transparent;
        }
    </style>
    <title>My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="inset-x-0 top-0 z-30 w-full border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg rounded-b-xl">
        <div class="px-4">
            <div class="flex items-center justify-between">
                <div class="flex shrink-0">
                    <a aria-current="page" class="flex items-center" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" height=40" width="40.5" viewBox="0 0 576 512">
                             <path fill="#000000" d="M386.5 111.5l15.1 249-11-.3c-36.2-.8-71.6 8.8-102.7 28-31-19.2-66.4-28-102.7-28-45.6 0-82.1 10.7-123.5 27.7L93.1 129.6c28.5-11.8 61.5-18.1 92.2-18.1 41.2 0 73.8 13.2 102.7 42.5 27.7-28.3 59-41.7 98.5-42.5zM569.1 448c-25.5 0-47.5-5.2-70.5-15.6-34.3-15.6-70-25-107.9-25-39 0-74.9 12.9-102.7 40.6-27.7-27.7-63.7-40.6-102.7-40.6-37.9 0-73.6 9.3-107.9 25C55.2 442.2 32.7 448 8.3 448H6.9L49.5 98.9C88.7 76.6 136.5 64 181.8 64 218.8 64 257 71.7 288 93.1 319 71.7 357.2 64 394.2 64c45.3 0 93 12.6 132.3 34.9L569.1 448zm-43.4-44.7l-34-280.2c-30.7-14-67.2-21.4-101-21.4-38.4 0-74.4 12.1-102.7 38.7-28.3-26.6-64.2-38.7-102.7-38.7-33.8 0-70.3 7.4-101 21.4L50.3 403.3c47.2-19.5 82.9-33.5 135-33.5 37.6 0 70.8 9.6 102.7 29.6 31.8-20 65.1-29.6 102.7-29.6 52.2 0 87.8 14 135 33.5z"/>
                        </svg>
                        <span>Learning Blog</span>
                        <p class="sr-only">Website Title</p>
                    </a>
                </div>
                <div class="hidden md:flex md:items-center md:justify-center md:gap-5">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/items" :active="request()->is('items')">Blogs</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')" type="button">Contact</x-nav-link>
                </div>
                <div class="flex items-center justify-end gap-3">
                    <a class="hidden items-center justify-center rounded-xl bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 transition-all duration-150 hover:bg-gray-50 sm:inline-flex"
                       href="/login">Sign in</a>
                    <a class="inline-flex items-center justify-center rounded-xl bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                       href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">@yield('title')</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
           @yield('content')
        </div>
    </main>
</div>
</body>
</html>
