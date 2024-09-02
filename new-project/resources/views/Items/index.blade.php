@extends('components.layout')
@section('title')
    Item Page
@endsection
@section('content')

    <div class="bg-white">
        <div>
            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                    <div class="flex items-center space-x-4 justify-between ">
                        <a class="relative w-50 h-12 flex justify-center items-center  py-2.5 font-medium tracking-wide text-lg text-black capitalize  rounded-md  focus:outline-none transition duration-300 transform active:scale-95 ease-in-out" href="{{ route('items.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40" width="30" viewBox="0 0 512 512" style="margin-right: 10px;">
                                <path fill="#000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                            </svg>
                            Create New Item
                        </a>
                    </div>

                    <div class="flex items-center">


                        <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                            <span class="sr-only">View grid</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                            <span class="sr-only">Filters</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pb-24 pt-6">

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <form class="hidden lg:block">

                            <div class=" border-gray-200 py-6">
                                <div class="relative">
                                    <form action="{{ route('items.index') }}" method="GET">
                                        <button type="button" class="text-white w-40 h-12 bg-black hover:bg-gray-700 focus:ring-4 font-medium rounded-lg text-lg px-4 py-2.5 text-center inline-flex items-center " >
                                            <div class="pr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                                    <path fill="#ffffff" d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/>
                                                </svg>
                                            </div>
                                           <a href="{{route('category.index')}}"> Categories</a>
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
                                <!-- Filter section, show/hide based on section state. -->
                            </div>

                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <!-- Your content -->
                            <div class="bg-white py-16">
                                <div class="container mx-auto px-4">
                                    <h2 class="text-3xl font-bold text-black mb-8">Introducing Our Latest Items</h2>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                        @foreach($items as $item)

                                        <div class="bg-white rounded-lg shadow-lg p-8">
                                            <div class="relative overflow-hidden">
                                                <img class="object-cover w-full h-full" src="{{ Storage::url($item['image']) }}" alt="Product">
                                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                                <div class="absolute inset-0 flex items-center justify-center">
                                                    <button class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-300"><a href="/items/{{$item['id']}}">View Item</a></button>
                                                </div>
                                            </div>
                                            <h3 class="text-xl font-bold text-gray-900 mt-4">{{$item['title']}}</h3>
                                            <p class="text-gray-500 text-sm mt-2">  {{$item['description']}}</p>

                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

@endsection
