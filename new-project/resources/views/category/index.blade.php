@extends('components.layout')
@section('title')
   Categories Page
@endsection
@section('content')
    <section class="dark:bg-gray-100 dark:text-gray-800">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <div class="flex items-center space-x-4 justify-between ">
                <a class="relative w-50 h-12 flex justify-center items-center  py-2.5 font-medium tracking-wide text-lg text-black capitalize  rounded-md  focus:outline-none transition duration-300 transform active:scale-95 ease-in-out" href="{{ route('category.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="30" viewBox="0 0 512 512" style="margin-right: 10px;">
                        <path fill="#000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                    </svg>
                    Create New Category
                </a>
                <!-- Dropdown button -->
        </div>
        </div>
        <div class="">
            <table class="mt-4 w-auto bg-white min-w-max   text-center">
                <thead>
                <tr class="text-center pl-20 bg-gray-200 ">
                    <th class="cursor-pointer  border-y border-blue-gray-100 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Category ID<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Category Name<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Category Status<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                            </svg>
                        </p>
                    </th>
                    <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Actions</p>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)

                <tr >
                    <td class="p-4 pl-10 border-b border-blue-gray-50">
                        <div class="flex items-center ">
                            <div class="flex l">
                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$category->id}}</p>
                            </div>
                        </div>
                    </td>
                    <td class=" pl-10 border-b border-blue-gray-50">
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                            <div class="flex ">
                                    {{$category->name}}</p>
                            </div>
                        </div>
                    </td>    <td class=" pl-10 border-b border-blue-gray-50">
                        <div class="flex items-center gap-1">
                            @if($category->status=='active')
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#21cc71" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff0000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"/></svg>                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">

                            @endif
                            <div class="flex ">
                                    {{$category->status}}
                            </div>
                        </div>
                    </td>
                    <td class="  pl-10 border-b border-blue-gray-50">
                        <div class="flex  justify-end">
                            <form action="{{route('category.destroy',$category->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize  rounded-md hover:bg-gray-200  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000" d="M170.5 51.6L151.5 80l145 0-19-28.4c-1.5-2.2-4-3.6-6.7-3.6l-93.7 0c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80 368 80l48 0 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-8 0 0 304c0 44.2-35.8 80-80 80l-224 0c-44.2 0-80-35.8-80-80l0-304-8 0c-13.3 0-24-10.7-24-24S10.7 80 24 80l8 0 48 0 13.8 0 36.7-55.1C140.9 9.4 158.4 0 177.1 0l93.7 0c18.7 0 36.2 9.4 46.6 24.9zM80 128l0 304c0 17.7 14.3 32 32 32l224 0c17.7 0 32-14.3 32-32l0-304L80 128zm80 64l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                  </button>
                            </form>
                                <button type="submit"  class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize   rounded-md hover:bg-gray-200  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out">
                                   <a href="{{route('category.edit',$category->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                                        <path fill="#000" d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344
                                     121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3
                                      31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9
                                       25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152L0 424c0 48.6 39.4 88 88 88l272 0c48.6 0 88-39.4 88-88l0-112c0-13.3-10.7-24-24-24s-24
                                        10.7-24 24l0 112c0 22.1-17.9 40-40 40L88 464c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 64z"/></svg>
                                   </a>
                                </button>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

