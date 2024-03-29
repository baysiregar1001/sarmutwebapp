{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('dashboard.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                {{-- Judul Post --}}
                <h2 class="my-3">{{ $post->title }}</h2>

                {{-- Author dan Kategori Post --}}
                <a href="/dashboard/posts" class="badge bg-success"><span data-feather="arrow-left"></span> Kembali</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning mx-1"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus postingan?')">
                        <span data-feather="x-circle"></span> Hapus
                    </button>
                </form>

                {{-- Gambar dalam Post --}}
                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                {{-- Isi Post --}}
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
@endsection
