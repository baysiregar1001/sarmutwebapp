{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')
<section>
    <!-- card area start -->
    <div class="card_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="head_text">Informasi Jadwal Dokter</h2>
                    <p class="head_para">Informasi Jadwal Praktek Dokter Rsu. Sarimutiara Lubuk Pakam</p>
                </div>
                <div class="col-12">
                    <div class="owl-carousel slider_carousel">
                        <div class="card_box">
                            <img class="img-fluid w-100" src="/img/gambar/fotodokter/Dr.1.jpeg" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                        <div class="card_box">
                            <img class="img-fluid w-100" src="" alt="">
                            <div class="card_text">
                                <h4></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- card area end -->

<!-- all js here -->


<script>
    function slider_carouselInit() {
        $('.owl-carousel.slider_carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            stagePadding: 2,
            autoplay: false,
            nav: true,
            navText: ["<i class='far fa-arrow-alt-circle-left'></i>", "<i class='far fa-arrow-alt-circle-right'></i>"],
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 5
                }
            }
        });
    }
    slider_carouselInit();
</script>

@endsection