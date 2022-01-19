@props(['name'])

    @error($name)
    <p class="text-red-500 text-cs mt-2">{{ $message }}</p>
    @enderror
