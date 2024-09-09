@extends('components.layout')
@section('title')
    Item Page
@endsection
@section('content')
<div class="flex h-screen bg-gray-100">
    <div class="m-auto mt-20">
        <div>
            <div class="mt-5 bg-white rounded-lg shadow">
                <div class="flex">
                    <div class="flex-1 py-5 pl-5 overflow-hidden">
                        <h1 class="inline text-2xl font-semibold leading-none">Add new product</h1>
                    </div>
                </div>
                <hr class="mt-4">
                <div class="flex flex-row-reverse p-3">
                    <div class="flex-initial pl-3">
                            <div class="px-5 pb-5">
                                <form action="{{ route('items.store') }}" method="POST" style="display:inline;" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="px-5 pb-5">
                                        <select name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="" disabled selected>Categories</option>
                                            @foreach($categories as $category)
                                                @if($category->status=='active')
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <select name="author_id" class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="" disabled selected>Author</option>
                                            @foreach($authors as $author)
                                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        </select>

                                        <x-form-input placeholder="Title" name="title" id="title" />
                                        <x-form-error name="title" />

                                        <x-form-input placeholder="Description" name="description" id="description" />
                                        <x-form-error name="description" />

                                        <div class="form-group mt-3 mb-3">
                                          <x-form-label>Image</x-form-label>
                                            <x-form-input type="file" name="image" id="image" class="form-control" />
                                            <x-form-error name="image" />
                                        </div>
                                        <x-form-button>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="35" width="20" viewBox="0 0 512 512" >
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
