@extends("layout.main")

@section("container")


<article class="mb-5">

    <h2>{{ $post["title"] }} </h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>

</article>
<a href="/blog">Kembali ke daftar Blog</a>



@endsection