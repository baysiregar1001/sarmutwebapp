{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')

<section id=visimisi>
    <div class="container x-auto px-4 pt-16 pb-10">

        <div class="grid grid-cols-12">

            {{-- PEMBAGIAN GRID 4 KOLOM UNTUK LAYAR BESAR --}}
            <div class="col-span-6 lg:col-span-6 order-2">
                {{-- JUDUL HERO SECTION --}}
                <div class="lg:my-10 align center">
                    <h1 class="text-uppercase text-success font-bold">Akreditasi</h1>
                    <h2 class="font-bold text-4xl mb-5">RSU <span class="text-green-600">Sari Mutiara</span>
                        Lubuk Pakam</h2>
                </div>
                <figure class="figure">
                    <a href="/"><img src="/img/gambar/akreditasi/1.jpg" alt="profile Pic" height="900" width="400"></a>
                    <figcaption class="figure-caption"></figcaption>
                </figure>
            </div>
            {{-- Isi Akreditasi --}}
            <div class="col-span-6 lg:col-span-6 order-2">
                <div class="lg:my-10 align center">
                    <h1 class="text-justify"></h1>
                    <p class="mt-3 mb-4 text-justify">
                        RSU. Sarimutiara Lubuk Pakam merupakan lembaga kesehatan yang telah sukses meraih akreditasi, menegaskan kualitas dan komitmen mereka terhadap pelayanan kesehatan yang unggul. Proses akreditasi ini dilakukan oleh lembaga terkemuka, seperti Komisi Akreditasi Rumah Sakit (KARS), yang memberikan penilaian atas kepatuhan RSU Sarimutiara Lubuk Pakam terhadap standar kesehatan yang ditetapkan. Keberhasilan meraih akreditasi menunjukkan bahwa rumah sakit ini telah memenuhi persyaratan yang ketat, mencakup aspek medis, manajerial, dan pelayanan pelanggan.
                        Salah satu keunggulan akreditasi RSU Sarimutiara Lubuk Pakam adalah implementasi prosedur yang ketat dan terstandarisasi. Melalui penerapan standar operasional prosedur (SOP) yang cermat, rumah sakit ini dapat memastikan bahwa setiap aspek layanan, mulai dari pemeriksaan medis hingga administrasi, dilakukan dengan tingkat akurasi dan ketepatan yang tinggi. Hal ini memberikan jaminan kepada pasien bahwa mereka menerima perawatan kesehatan yang sesuai dengan standar internasional.
                        Selain itu, akreditasi ini juga mencerminkan fokus RSU Sarimutiara Lubuk Pakam terhadap pengembangan sumber daya manusia. Rumah sakit ini terus melibatkan tim medisnya dalam pelatihan dan pengembangan profesional untuk memastikan bahwa mereka selalu terkini dengan perkembangan ilmu kedokteran dan teknologi medis. Keberhasilan rumah sakit dalam mengelola dan mengembangkan sumber daya manusia ini turut berkontribusi pada peningkatan kualitas pelayanan yang diberikan kepada pasien.
                        Dengan meraih akreditasi, RSU Sarimutiara Lubuk Pakam tidak hanya menegaskan kualitas pelayanan kesehatannya, tetapi juga membangun kepercayaan masyarakat. Akreditasi menjadi landasan bagi rumah sakit ini untuk terus meningkatkan mutu layanan, memenuhi harapan pasien, dan menjaga reputasi sebagai penyedia layanan kesehatan yang terkemuka di Lubuk Pakam dan sekitarnya.
                    </p>
                </div>
            </div>
</section>
@endsection