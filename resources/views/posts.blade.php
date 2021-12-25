<x-layout>
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>


            <p> Author: <a href="/authors/{{ $post->author->name }}">{{ $post->author->name }}</a> </p>
            <p> Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
