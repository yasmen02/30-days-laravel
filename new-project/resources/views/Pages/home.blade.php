@extends('components.layout')
  @section('title')
        Home Page
  @endsection
@section('content')
    <body class="text-gray-900 bg-gray-100">
    <section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6">
        <div class="flex flex-wrap items-center justify-between mb-8">
            <h2 class="mr-10 text-4xl font-bold leading-none md:text-5xl">
                Welcome to learning and education blogging
            </h2>
            <h2 class="mr-10 mt-2 mb-5 text-lg font-bold leading-none md:text-lg">Your Gateway to Lifelong Learning and
                Educational Excellence</h2>
            <p>Welcome to learning and education blogging, your trusted resource for [ "effective learning strategies," "educational trends,"
                "personal development"]. Whether you're a student, educator, or lifelong learner, we provide insightful
                and practical content to help you achieve your educational goals.</p>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($items as $item)
                <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                    <img src="{{$item['image'] }}" alt="Card img"
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
        <div class="flex justify-center">
            <button type="button"
                    class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-50 dark:text-gray-600"><a
                    href="/blogs"
                    class="block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">
                    more posts
                </a></button>
        </div>
    </section>
    </body>
@endsection

