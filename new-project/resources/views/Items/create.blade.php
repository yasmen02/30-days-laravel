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
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <input placeholder="Title" name="title" id="title" class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                        @error('title')
                                        <div style="color: red; font-weight: bold; font-size: 13px">{{ $message }}</div>
                                        @enderror

                                        <input placeholder="Description" name="description" id="description" class="text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                        @error('description')
                                        <div style="color: red; font-weight: bold; font-size: 13px">{{ $message }}</div>
                                        @enderror

                                        <input placeholder="Author" name="author" class="text-black mt-3  placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                        @error('author')
                                        <div style="color: red; font-weight: bold; font-size: 13px">{{ $message }}</div>
                                        @enderror

                                        <div class="form-group mt-3 mb-3">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                            @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-black rounded-md hover:bg-gray-800 focus:outline-none focus:bg-gray-900 transition duration-300 transform active:scale-95 ease-in-out">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="35" width="20" viewBox="0 0 512 512" style="margin-right: 10px;">
                                                <path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                            </svg>
                                            Add
                                        </button>
                                    </div>
                                </form>

                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
