@extends("layout.main")

@section("container")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }} </h2>
            <p>By. <a href="/authors/{{$post->author->username}} " class="text-decoration-none"> {{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }} " class="text-decoration-none">{{ $post->category->name }}</a> </p>
            <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid mb-5" alt="...">
            {!! $post->body !!}
            <br>
            <a href="/blog">Kembali ke daftar Blog</a>
        </div>
    </div>
</div>

<article class="mb-5">


</article>



@endsection