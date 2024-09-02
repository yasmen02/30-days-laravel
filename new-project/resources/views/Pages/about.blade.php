@extends('components.layout')
@section('title')
   About Page
@endsection
@section('content')
    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white"> At {{$name}} {{$about}}</p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="https://i.ibb.co/FhgPJt8/Rectangle-116.png" alt="A group of People"/>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Who We Are
                </h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">{{$who_we_are}}</p>
            </div>
            <div class="w-full lg:w-8/12 lg:pt-8">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                    @if(isset($teachers))
                        @foreach($teachers as $teacher)
                            <div class="p-4 pb-6 flex justify-center flex-col items-center">
                                <img class="md:block hidden"
                                     src="{{ asset('storage/images/teachers/'.$teacher['image']) }}"
                                     alt="{{$teacher['name']}}"/>
                                <img class="md:hidden block"
                                     src="{{ asset('storage/images/teachers/'.$teacher['image']) }}"
                                     alt="{{$teacher['name']}}"/>
                                <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4"> {{$teacher['name']}}</p>
                                <p>{{$teacher['email']}}</p>
                            </div>
                        @endforeach
                    @else
                        {{ 'not found teacher' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


