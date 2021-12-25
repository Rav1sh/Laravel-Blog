<x-layout>
        <article>
            <h1>
                {{ $post->title }}
            </h1>

            <p> Author: <a href="/authors/{{ $post->author->name }}">{{ $post->author->name }}</a> </p>
            <p> Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>

            <div>
                {{ $post->body }}
            </div>
        </article>

    <a href="/">back</a>
</x-layout>
