@extends("layout.main")

@section("container")

@foreach ( $posts as $post)
<h1 class="mb-4">Halaman Blogs Post</h1>
<article class="mb-5 border-bottom">
    <h2>
        <a href="/posts/{{ $post->slug}}">
            {{$post['title']}}
        </a>
    </h2>
    <p>By. <a href="/authors/{{$post->author->username}} " class="text-decoration-none"> {{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }} " class="text-decoration-none">{{ $post->category->name }}</a> </p>
    {!! $post->excerpt !!}
    <p>
        <a href="posts/{{ $post->slug}}" class="text-decoration-none">
            Read more..
        </a>
    </p>

</article>
@endforeach

@endsection