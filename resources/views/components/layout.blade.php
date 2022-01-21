<!doctype html>

<title>Gaming Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logoo.png" alt="Gaming Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">
                            Welcome, {{ auth()->user()->name }}!
                        </button>
                    </x-slot>

                    <form method="get" action="/profile/{{auth()->id()}}">
                        <input type="hidden" value="{{auth()->id()}}" name="id" id="id">
                        @csrf
                        <button type="submit" class="text-xs font-bold uppercase py-3 px-3">
                            {{auth()->user()->username}}</button>

                    </form>

                    <x-dropdown-item
                        href="/admin/posts"
                        :active="request()->is('admin/posts')"
                    >
                        Dashboard
                    </x-dropdown-item>

                    <x-dropdown-item
                        href="/admin/posts/create"
                        :active="request()->is('admin/posts/create')"
                    >
                        New Post
                    </x-dropdown-item>

                    <x-dropdown-item
                        href="#"
                        x-data="{}"
                        @click.prevent="document.querySelector('#logout-form').submit()"
                    >
                        Log Out
                    </x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
            @else
                <a href="/register"
                   class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                    Register
                </a>

                <a href="/login"
                   class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                    Log In
                </a>
            @endauth
    </nav>

    {{ $slot }}

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/blaze.png" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl mt-10">Prolisys</h5>
        <p class="text-sm mt-3">The best gaming blogpost website for everyone</p>

    </footer>
</section>
</body>
