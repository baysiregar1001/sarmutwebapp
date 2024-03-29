{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

    {{-- JUDUL HALAMAN --}}
    <div class="container py-32">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-4" style="background-color: rgba(0, 0, 0, 0.7)";>{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- KEMBALI KE HALAMAN LIST POST --}}
    <a href="/blog"><b><h5 class="mt-5">Back to Posts</h5></b></a>

@endsection