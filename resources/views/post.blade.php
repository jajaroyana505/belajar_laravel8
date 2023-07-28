@extends("layout.main")

@section("container")


<article class="mb-5">

    <h2>{{ $post->title }} </h2>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}
    <a href="/blog">Kembali ke daftar Blog</a>

</article>



@endsection