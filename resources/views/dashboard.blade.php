<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                        <div class="flex flex-col text-left ">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div
                                        class="  shadow overflow-hidden border-b border-gray-200 sm:rounded-lg ">
                                        <table class="min-w-full divide-y divide-gray-800">
                                            <thead class="bg-gray-400">
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="
                  px-6
                  py-3
                  text-left text-xs
                  font-medium
                  text-white
                  uppercase
                  tracking-wider
                "
                                                >
                                                    User name
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                  px-6
                  py-3
                  text-left text-xs
                  font-medium
                  text-white
                  uppercase
                  tracking-wider
                "
                                                >
                                                    title
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                  px-6
                  py-3
                  text-left text-xs
                  font-medium
                  text-white
                  uppercase
                  tracking-wider
                "
                                                >
                                                    body
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                  px-6
                  py-3
                  text-left text-xs
                  font-medium
                  text-white
                  uppercase
                  tracking-wider
                "
                                                >
                                                    Action
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">

                                            @foreach($posts as $post)
                                            <tr>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{$post->user->name}}</div>

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{$post->title}}</div>

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{$post->body}}
                                                </td>
                                                <td
                                                    class="
                  px-6
                  py-4
                  whitespace-nowrap
                  text-right text-sm
                  font-medium
                "
                                                >
                                                    <a  href="{{url('post/edit',$post->id)}}" class="text-green-600 hover:text-indigo-900"
                                                    >Edit</a
                                                    >
                                                    <a  href="{{url('post/delete',$post->id)}}" class="text-red-600 hover:text-indigo-900"
                                                    >Delete</a
                                                    >
                                                </td>
                                            </tr>
                                            @endforeach


                                            <!-- More people... -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
