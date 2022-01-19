@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate</h2>
            </header>

            <div class="mt-10">
                <textarea name="body" class="w-full" id="" rows="5" placeholder="Type your text here" required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-10">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>

@else
    <p>
        <a href="/login">Login to Comment</a>
    </p>
@endauth
