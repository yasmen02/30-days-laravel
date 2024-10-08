@extends('components.layout')
@section('title')
    Add Category Page
@endsection
@section('content')
    <div class="flex h-screen bg-gray-100">
        <div class="m-auto mt-20">
            <div>
                <div class="mt-5 bg-white rounded-lg shadow">
                    <div class="flex">
                        <div class="flex-1 py-5 pl-5 overflow-hidden">
                            <h1 class="inline text-2xl font-semibold leading-none">Add New Category</h1>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div class="flex flex-row-reverse p-3">
                        <div class="flex-initial pr-20">
                            <div class="px-5 pb-5">
                                <form action="{{route('category.store')}}" method="POST" style="display:inline;" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="px-5 pb-5">
                                        <x-form-input placeholder=" Enter Name Category" name="name" id="name" />
                                        <x-form-error name="name" />

                                        <x-form-button>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="35" width="20" viewBox="0 0 512 512" style="margin-right: 10px;">
                                                <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                            </svg>
                                            Add
                                        </x-form-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
