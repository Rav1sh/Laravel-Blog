<x-layout>
    <x-setting heading="Publish new Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="excerpt"/>
            <x-form.input name="body"/>


            {{-- Category --}}
            <div class="mb-6">
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </div>

            <x-form.button>Publish</x-form.button>
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
    </x-setting>
</x-layout>
