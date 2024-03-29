<x-layout>
    @include('posts._header')
    <main class="mx-auto mt-6 max-w-6xl space-y-6 lg:mt-20">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
            {{$posts->links()}}
        @else
            <p class="text-center">No posts yet, please check back later.</p>
        @endif
    </main>
</x-layout>
