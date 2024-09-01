@extends('components.layout')
@section('title')
    Item Page
@endsection
@section('content')
    <section class="dark:bg-gray-100 dark:text-gray-800">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <div class="flex items-center space-x-4 justify-between ">
                <a class="relative w-50 h-12 flex justify-center items-center  py-2.5 font-medium tracking-wide text-lg text-black capitalize  rounded-md  focus:outline-none transition duration-300 transform active:scale-95 ease-in-out" href="{{ route('items.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="30" viewBox="0 0 512 512" style="margin-right: 10px;">
                        <path fill="#000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                    </svg>
                    Create New Item
                </a>
                <!-- Dropdown button -->

                <div class="relative">
                    <form action="{{ route('items.index') }}" method="GET">
                        <button type="button" class="text-white w-40 h-12 bg-black hover:bg-gray-700 focus:ring-4 font-medium rounded-lg text-lg px-4 py-2.5 text-center inline-flex items-center " >
                            <div class="pr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                    <path fill="#ffffff" d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/>
                                </svg>
                            </div>
                            Categories
                        </button>
                        <!-- Dropdown menu -->
                        <div class="  bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4 absolute top-full left-0 w-48">
                            <ul class="py-1">
                                <li>
                                    <button type="submit" name="category" value="0" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">
                                        All Categories
                                    </button>
                                </li>
                                @foreach($categories as $category)
                                    <li>
                                        <button type="submit" name="category" value="{{ $category->id }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">
                                            {{ $category->name }}
                                        </button>
                                    </li>
                                    <hr>
                                @endforeach
                            </ul>
                        </div>
                    </form>
                </div>
                <!-- Create New Item link -->
            </div>
            <div class="flex flex-wrap -mx-4">
                @foreach($items as $item)
                    <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                        <img src="{{$item['image']}}" alt="Card img"
                             class="object-cover object-center w-full h-48"/>
                        <div class="flex flex-grow">
                            <div class="triangle"></div>
                            <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                                <div>
                                    <a
                                        href="/items/{{$item['id']}}"
                                        class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-blue-600"
                                    >
                                        {{$item['title']}}
                                    </a>
                                    <p class="mb-4">
                                        {{$item['description']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

