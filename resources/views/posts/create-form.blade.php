<x-layout>
    <section>
        <form class="border-2 mt-10" method="POST" action="create-post">
            @csrf
        <div class="">
        <input class="border-b-2 py-2 px-5 w-full outline-none" placeholder="Post Title" name="title" type="text" />


<textarea
    class="border-2 p-5 w-full h-[200px] placeholder-gray-500 focus:outline-none focus:border-blue-500"
    name="post" id="post" placeholder="Type your Post">
</textarea>

        </div>

        <div class="my-10 py-2 flex justify-end gap-5">
        <button class="px-5 py-1 bg-slate-300 text-blue-500 text-sm font-bold border-2 rounded-2xl hover:bg-slate-500 hover:text-white">Cancel</button>
    <button type="submit" class="px-5 py-1 bg-slate-300 text-blue-500 text-sm font-bold border-2 rounded-2xl hover:bg-slate-500 hover:text-white">Create</button>
    </div>
        </form>
    </section>
</x-layout>