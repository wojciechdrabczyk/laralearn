@auth()

    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?id={{auth()->id()}}" alt="" width="40"
                     height="40px"
                     class="rounded-full">
                <h2 class="ml-4">Wanna participate</h2>
            </header>
            <div class="mt-5">
                                <textarea name="body" id="" cols="30" rows="10"
                                          class="w-full text-sm focus:outline-none focus:ring border-2 border-blue-500 p-2 rounded"
                                          placeholder="Write something..." required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror

            </div>
            <div class="flex justify-end">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">log in</a> to leave a comment
    </p>
@endauth
