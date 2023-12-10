{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

{{-- Ruang rawat inap --}}


<section id="rawatinao">
    <div class="container pt-16 pb-10">
        <div class="row px-4">
            <div class="col text-center mt-2">
                <h1 class="text-uppercase text-success font-bold mb-3 pt-3">Ruangan Rawat Inap</h1>
                <h2 class="font-bold text-4xl mb-5">RSU <span class="text-green-600">Sari Mutiara</span>
                    Lubuk Pakam</h2>
            </div>
        </div>
    </div>
</section>

<section id="fotoruangrawat">
    <div class="container x-auto px-4 mb-7 pb-10">
        <div class="grid grid-cols-12">
            {{-- Foto Kamar Rawat Inap --}}
            <div class="col-span-12 lg:col-span-12 order-2">
                {{-- JUDUL HERO SECTION --}}
                <div class="lg:my-10 align center text-center">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/gambar/rawatinap/1.svg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Kamar 4 Bed</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/gambar/rawatinap/1.svg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Kamar 4 Bed</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/gambar/rawatinap/1.svg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2>Kamar 4 Bed</h2>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col mb-4">
                    <h1 class="mb-3">Fasilitas:</h1>
                    <a class="btn btn-success" href="#" role="button">Air Conditioner</a>
                    <a class="btn btn-success" href="#" role="button">Kamar Mandi</a>
                    <a class="btn btn-success" href="#" role="button">Sofa</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection