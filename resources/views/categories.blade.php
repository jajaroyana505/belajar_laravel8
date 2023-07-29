@extends("layout.main")

@section("container")



<h1>Semua Category</h1>
<ul>

    @foreach ( $categories as $category)
    <li><a href="/categories/{{$category->slug}}">{{ $category->name }}</a> </li>
    @endforeach

</ul>


@endsection