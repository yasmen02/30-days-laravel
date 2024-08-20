<x-layout>
    <x-slot:heading>
        Blogs Page
    </x-slot:heading>
<section class="dark:bg-gray-100 dark:text-gray-800">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <div class="flex flex-wrap -mx-4">
            @foreach($blogs as $blog)
                <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                    <img src="{{Storage::url('images/'.$blog['image']) }}" alt="Card img" class="object-cover object-center w-full h-48" />
                    <div class="flex flex-grow">
                        <div class="triangle"></div>
                        <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                            <div>
                                <a
                                    href="/blogs/{{$blog['id']}}"
                                    class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-blue-600"
                                >
                                    {{$blog['title']}}
                                </a>
                                <p class="mb-4">
                                    {{$blog['description']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
</x-layout>
