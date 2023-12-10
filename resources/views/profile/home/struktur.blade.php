{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

{{-- Struktur Organisasi --}}

<section id="meetourdoctor">
    <div class="container pt-16 pb-10">
        <div class="row px-4">
            <div class="col text-center mt-2">
                <h1 class="text-uppercase text-success font-bold">Struktur Organisasi</h1>
                <h2 class="font-bold text-4xl mb-5">RSU <span class="text-green-600">Sari Mutiara</span>
                    Lubuk Pakam</h2>
                <div class="col text-center mt-5">
                    <img src="/img/gambar/struktur/1.png" class="mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection