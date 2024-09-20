<x-layout>
    <section>
        <div class="p-5 mt-10 space-y-5 border-2 rounded-md">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-xl text-blue-600">{{$post->title}}</h1>

                @auth
                <a href="/posts/{{$post->id}}/edit-post" class="px-5 py-1 bg-slate-300 text-blue-500 text-sm font-bold border-2 rounded-2xl hover:bg-slate-500 hover:text-white">Edit</a>
                @endauth
                
            </div>
            <div class="font-light text-gray-600 text-sm leading-5 ">
                {{$post->post}}
            </div>
            <div class="flex justify-between items-center">
                <p>Auther: <span class="font-bold text-gray-800">{{ $post->user->name }}</span></p>
                <p>Posted on: {{$post->created_at}}</p>
            </div>
        </div>
    </section>

</x-layout>