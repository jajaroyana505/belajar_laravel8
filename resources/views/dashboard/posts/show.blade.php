@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-lg-8 ">
            <h2>{{ $post->title }} </h2>
            <a href="/dashboard/posts" class="btn btn-success my-3">
                <i class="bi bi-arrow-left"></i>
                Back to All posts
            </a>
            <a href="#" class="btn btn-warning my-3">
                <i class="bi bi-pencil-square"></i>
                Edit
            </a>
            <a href="#" class="btn btn-danger my-3">
                <i class="bi bi-x-circle"></i>
                Delete
            </a>
            <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid mb-5" alt="...">
            {!! $post->body !!}
            <br>
            <a href="/blog">Kembali ke daftar Blog</a>
        </div>
    </div>
</div>

@endsection