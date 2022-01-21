<x-layout>
    <header class="max-w-xl mx-auto mt-20 text-center">
        <h1 class="text-4xl">
            <span class="text-blue-500">Welcome {{ucwords(auth()->user()->username)}}</span>
        </h1>
    </header>
    <section class="px-6 py-8 mt-10">
        <main class="max-w-lg mx-auto">
            <form method="POST" action="/profile/update" class="mt-10">
                @csrf
                @method("PATCH")
                <div class="mb-6">
                    <label class="block mb-2 uppservase font-bold text-small text-gray-700"
                           for="name"
                    >
                        name

                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           placeholder="name"
                           name="name"
                           id="name"
                           value="{{auth()->user()->name}}"
                           required
                    >
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="mb-6 mt-6">
                        <label class="block mb-2 uppservase font-bold text-small text-gray-700"
                               for="username"
                        >
                            username

                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="text"
                               placeholder="username"
                               name="username"
                               id="username"
                               value="{{auth()->user()->username}}"
                               required
                        >
                        @error('username')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6 mt-6">
                        <label class="block mb-2 uppservase font-bold text-small text-gray-700"
                               for="email"
                        >
                            Email

                        </label>
                        <input class="border border-gray-400 p-2 w-full"
                               type="email"
                               placeholder="email"
                               name="email"
                               id="email"
                               value="{{auth()->user()->email}}"
                               required
                        >
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-4">

                            submit
                        </button>
                    </div>
                </div>
                </div>

            </form>
        </main>
    </section>


    {{--    <header class="max-w-xl mx-auto mt-20 text-center">--}}
{{--        <h1 class="text-4xl">--}}
{{--            <span class="text-blue-500">Welcome {{ucwords(auth()->user()->username)}}</span>--}}
{{--        </h1>--}}
{{--    </header>--}}
{{--    <section class="px-6 py-8 mt-10">--}}
{{--        <main class="max-w-lg mx-auto">--}}
{{--            <form method="POST" action="/profile/update" class="mt-10">--}}
{{--                @csrf--}}
{{--                @method("PATCH")--}}
{{--                <div class="mb-6">--}}
{{--                    <label class="block mb-2 uppservase font-bold text-small text-gray-700"--}}
{{--                           for="name"--}}
{{--                    >--}}
{{--                        name--}}

{{--                    </label>--}}
{{--                    <input class="border border-gray-400 p-2 w-full"--}}
{{--                           type="text"--}}
{{--                           placeholder="name"--}}
{{--                           name="name"--}}
{{--                           id="name"--}}
{{--                           value="{{auth()->user()->name}}"--}}
{{--                           required--}}
{{--                    >--}}
{{--                    @error('name')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}

{{--                    <div class="mb-6 mt-6">--}}
{{--                        <label class="block mb-2 uppservase font-bold text-small text-gray-700"--}}
{{--                               for="username"--}}
{{--                        >--}}
{{--                            username--}}

{{--                        </label>--}}
{{--                        <input class="border border-gray-400 p-2 w-full"--}}
{{--                               type="text"--}}
{{--                               placeholder="username"--}}
{{--                               name="username"--}}
{{--                               id="username"--}}
{{--                               value="{{auth()->user()->username}}"--}}
{{--                               required--}}
{{--                        >--}}
{{--                        @error('username')--}}
{{--                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <div class="mb-6 mt-6">--}}
{{--                        <label class="block mb-2 uppservase font-bold text-small text-gray-700"--}}
{{--                               for="email"--}}
{{--                        >--}}
{{--                            Email--}}

{{--                        </label>--}}
{{--                        <input class="border border-gray-400 p-2 w-full"--}}
{{--                               type="email"--}}
{{--                               placeholder="email"--}}
{{--                               name="email"--}}
{{--                               id="email"--}}
{{--                               value="{{auth()->user()->email}}"--}}
{{--                               required--}}
{{--                        >--}}
{{--                        @error('email')--}}
{{--                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="mb-6">--}}
{{--                        <button type="submit"--}}
{{--                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-4">--}}

{{--                            submit--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                </div>--}}

{{--            </form>--}}
{{--        </main>--}}
{{--    </section>--}}

</x-layout>
