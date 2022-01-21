<x-layout>
    <header class="max-w-xl mx-auto mt-20 text-center">
        <h1 class="text-lg font-bold mb-8 pb-2 border-b">
            <span class="text-blue-500">Profile: {{ucwords(auth()->user()->name)}}</span>
        </h1>
    </header>

    <section class="px-6 py-8 mt-10">
        <main class="max-w-lg mx-auto">
            <form method="POST" action="/profile/update" class="mt-10">
                @csrf
                @method("PATCH")

                {{-- Name --}}
                <div class="mb-6">
                    <label class="p-2 w-full rounded-xl font-bold"
                           for="name">
                        Name
                    </label>
                    <input class="border border-gray-200 p-2 w-full rounded-xl"
                           type="text"
                           placeholder="name"
                           name="name"
                           id="name"
                           value="{{auth()->user()->name}}"
                           required>
                    <x-form.error name="name" />

                    {{-- Username --}}
                    <div class="mb-6 mt-6">
                        <label class="p-2 w-full rounded-xl font-bold"
                               for="username">
                            Username
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded-xl"
                               type="text"
                               placeholder="username"
                               name="username"
                               id="username"
                               value="{{auth()->user()->username}}"
                               required
                        >
                        <x-form.error name="username" />
                    </div>

                    {{-- Email --}}
                    <div class="mb-6 mt-6">
                        <label class="p-2 w-full rounded-xl font-bold"
                               for="email">
                            Email
                        </label>
                        <input class="border border-gray-200 p-2 w-full rounded-xl"
                               type="email"
                               placeholder="email"
                               name="email"
                               id="email"
                               value="{{auth()->user()->email}}"
                               required>
                        <x-form.error name="email" />
                    </div>

                    {{-- Update --}}
                    <div class="mb-6">
                        <button type="submit"
                                class="bg-blue-600 text-white rounded-xl py-2 px-4 hover:bg-blue-500 mt-4">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </main>
    </section>
</x-layout>
