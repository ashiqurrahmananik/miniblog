<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table style="width: 100%;">
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td style="text-align: center;">{{$post->user->name}}</td>
                            <td style="text-align: center;">{{$post->title}}</td>
                            <td style="text-align: center;">{{$post->body}}</td>
                            <td style="text-align: center;"><button type="submit"style="background-color:blue;border-radius:5px;padding:10px;color:white;margin-left:5px;">Edit</button><button type="submit"style="background-color:red;border-radius:5px;padding:10px;color:white">Delete</button></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
