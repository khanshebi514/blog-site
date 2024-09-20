<x-layout>
  <div class="mt-10">
    <div class="border-b-2 my-10 py-2">
      @auth
      <a href="/posts/create-post-form" class="px-5 py-1 bg-slate-300 text-blue-500 text-sm font-bold border-2 rounded-2xl hover:bg-slate-500 hover:text-white">Create Post</a>
      @endauth
    
    </div>
    @forelse($posts as $post)
    <a href="/posts/{{$post->id}}"
      class="w-full bg-stone-400 border-2 text-black font-semibold text-lg px-3 py-5 rounded-lg block hover:bg-slate-300 hover:font-bold mt-2">
      {{$post->title}}
    </a>
  @empty
  <div> No Post found</div>
@endforelse
  </div>

</x-layout>