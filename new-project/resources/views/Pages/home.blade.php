@extends('components.layout')
  @section('title')
        Home Page
  @endsection
@section('content')
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
        <div class="lg:col-span-3">
            <!-- Your content -->
            <div class=" py-16">
                <div class="container mx-auto px-4">
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
        <div class="flex justify-center">
            <button type="button"
                    class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-50 dark:text-gray-600"><a
                    href="/items"
                    class="block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">
                    more posts
                </a></button>
        </div>
    </section>
@endsection

