@extends("layout.main")

@section("container")



<h1> Post Category : {{ $category }} </h1>

@foreach ( $posts as $post)
<article class="mb-5">
    <a href="/posts/{{ $post->slug}}">
        <h2>{{$post['title']}}</h2>
    </a>
    <h5>by : {{$post->author->name}}</h5>
    {!! $post->excerpt !!}
</article>
@endforeach



@endsection