<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>
                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name" type="name" autocomplete="nickname" />
                    <x-form.input name="username" type="username" autocomplete="username" />
                    <x-form.input name="email" type="email" autocomplete="email" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />
                    <x-form.field>
                        <div class="mb-6{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">Confirm Password</label>
                            <div class>
                                <input class="border border-gray-400 p-2 w-full rounded" type="password" name="password"
                                       autocomplete="new-password">
                                @if($errors->has('password_confirmation'))
                                    <span class="text-red-500 text-xs mt-2">
                            <p>{{ $errors->first('password_confirmation') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </x-form.field>
                    <x-form.button>Register</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
