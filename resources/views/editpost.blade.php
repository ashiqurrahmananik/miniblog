<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if(session()->has('status'))
                        <div style="
                            text-align: center;
                            font-size: 25px;
                            padding: 8px 8px;
                            background-color: cadetblue;color:white;margin-bottom: 20px;">
                            {{session('status')}}</div>
                    @endif
                    <form method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                        <input style="width:100%" type="text" name="title" id="title"  value="{{$post->title}}"/>
                        <textarea style="width:100% ;margin-top:30px;height:300px;" type="text" name="body" id="body">{{$post->body}}</textarea>
                        <button type="submit"style="background-color:green;border-radius:5px;padding:10px;color:white">update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
