@props(['post'])
<article
    class="rounded-xl border border-black border-opacity-0 transition-colors duration-300 hover:border-opacity-5 hover:bg-gray-100"
>
    <div class="px-5 py-6 lg:flex">
        <div class="flex-1 lg:mr-8">
            {{-- TODO --}}
            <img
                src="{{ asset('storage/' . $post->thumbnail) }}"
                alt="Blog Post illustration"
                class="rounded-xl"
            />
        </div>

        <div class="flex flex-1 flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <a href="/posts/{{ $post->slug }}">
                        <h1 class="text-3xl">{{ $post->title }}</h1>
                    </a>

                    <span class="mt-2 block text-xs text-gray-400">
                        Published
                        <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-2 text-sm space-y-4">
                <p>{!! $post->excerpt !!}</p>
            </div>

            <footer class="mt-8 flex items-center justify-between">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar" />
                    <div class="ml-3">
                        <a href="/?author={{$post->author->username}}">{{$post->author->name}}</a></h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a
                        href="/posts/{{ $post->slug }}"
                        class="rounded-full bg-gray-200 px-8 py-2 text-xs font-semibold transition-colors duration-300 hover:bg-gray-300"
                    >
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
