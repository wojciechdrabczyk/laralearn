<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />
            <x-form.select name="category_id" title="category" :items="\App\Models\Category::all()" />
            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>
