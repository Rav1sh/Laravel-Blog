<x-layout>
    <x-setting :heading="'Edit Post: ' . $user->username">
        <form method="POST" action="{{ route('profile') }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

    <x-form.input name="name" :value="old('name', $user->name)"/>
    <x-form.input name="username" :value="old('username', $user->username)"/>
    <x-form.input name="email" :value="old('email', $user->email)"/>

            <x-form.button>Update</x-form.button>
            </div>
        </form>

        @if (session()->has('success'))
            <div x-data="{ show: true }"
                 x-init="setTimeout(() => show = false, 4000)"
                 x-show="show"
                 class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
            >
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <x-form.error name="user" />
    </x-setting>
</x-layout>
