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
                <div class="lg:my-10 align-center">
                    <h1 class="text-uppercase text-success font-bold">Visi & Misi</h1>
                    <h2 class="font-bold text-4xl mb-5">RSU <span class="text-green-600">Sari Mutiara</span>
                        Lubuk Pakam</h2>
                </div>
            </div>

            {{-- Isi visi Misi --}}
            <div class="col-span-6 lg:col-span-6 order-2">
                <div class="lg:my-10 align center">
                    <h1 class="text-justify font-bold">Visi RSU Sari Mutiara adalah menjadi Rumah Sakit yang melaksanakan pelayanan kesehatan
                        paripurna yang berorientasi pada kepuasan pelanggan?
                    </h1>
                    <p class="mt-3 mb-4 text-justify">
                        Sedangkan untuk misi Rumah Sakit ini berkomitmen untuk menyelenggarakan pelayanan
                        kesehatan perseorangan secara paripurna, mulai dari tingkat sekunder hingga tersier,
                        dengan menjaga kualitas yang tinggi, berorientasi pada kepuasan masyarakat, dan tetap
                        terjangkau oleh seluruh lapisan masyarakat. Selain itu, upaya peningkatan kualitas pelayanan
                        menjadi fokus utama dengan pelaksanaan akreditasi sesuai dengan standar dan prosedur yang
                        telah ditetapkan. Dalam rangka mendukung tenaga kesehatan, Rumah Sakit ini juga aktif menyelenggarakan pendidikan dan pelatihan keterampilan di berbagai bidang, seperti pelayanan kesehatan, keperawatan, asuhan medis, dan keperawatan.Tidak hanya pada aspek pelayanan medis, Rumah Sakit ini juga berkomitmen untuk meningkatkankualitas administrasi dan kepegawaian, serta mengelola keuangan dan logistik dengan baik. Implementasi Sistem Informasi Manajemen Rumah Sakit (SIMRS) menjadi bagian integral dari upaya meningkat kanefisiensi dan efektivitas dalam menjalankan operasional rumah sakit. Kerjasama erat dengan pihak lain juga dijalin dengan tujuan untuk mencapai visi rumah sakit, memastikan sinergi dalam upaya pelayanan kesehatan yang terbaik untuk masyarakat.
                    </p>
                </div>
            </div>
</section>
@endsection