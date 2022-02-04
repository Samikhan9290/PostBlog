<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    @if(session('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">success</strong>
        <span class="block sm:inline">
                {{session('message')}}
        </span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
    </div>
    @endif

    <div class="py-2">
{{--        @if(session('message'))--}}
{{--            <div class="alert alert-success">{{session('message')}}</div>--}}
{{--        @endif--}}
        <form class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="">
            @csrf
            <h1 class="text-white p-5 font-bold">Create post</h1>
            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="tile">
                    title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="title" name="title">
            </div>
            <div class="mb-6">
                <label class="block text-white text-sm font-bold mb-2" for="body">
                    body
                </label>
                <input class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="body" name="body">

            </div>
            <div class="flex items-center justify-between">
{{--                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">--}}
{{--                   save--}}
{{--                </button>--}}
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="save">

            </div>
        </form>

    </div>

</x-app-layout>
