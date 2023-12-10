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
                    <h1 class="text-uppercase text-success font-bold">Sejarah</h1>
                    <h2 class="font-bold text-4xl mb-5">RSU <span class="text-green-600">Sari Mutiara</span>
                        Lubuk Pakam</h2>
                </div>
                <figure class="figure">
                    <a href="/"><img src="/img/gambar/sarmutsejarah.png" alt="profile Pic" height="700" width="350"></a>
                    <figcaption class="figure-caption"></figcaption>
                </figure>
            </div>

            {{-- Isi Sejarah --}}
            <div class="col-span-6 lg:col-span-6 order-2">
                <div class="lg:my-10 align center">
                    <h1 class="text-justify font-bold">Rumah Sakit Umum Sari Mutiara Lubuk Pakam yang terletak di Jln. Medan No 17 Lubuk Pakam, Kecamatan Lubuk Pakam Kabupaten Deli Serdang Provinsi Sumatera Utara.
                    </h1>
                    <p class="mt-3 mb-4 text-justify">
                        Sejarah berdirinya RSU Sari Mutiara Lubuk Pakam, Sejak Tahun 1986 Bidan Sauria Sitanggang mendirikan Klinik di Jl. Medan No 17 Lubuk Pakam Kabupaten Deli Serdang yang dikenal dengan Klinik Bersalin Tanjung, seiring dengan berjalannya waktu penduduk Kabupaten deli serdang semakin bertambah melihat kebutuhan masyarakat khususnya di daerah Lubuk Pakam perlu adanya pelayanan kesehatan yang mempunyai fasilitas yang lengkap. Pada tahun 1987 Pelayanan Kesehatan seperti Rumah Sakit hanya sedikit sehingga masyarakat daerah lubuk pakam harus melewati perjalanan yang cukup lama untuk berobat kerumah sakit salah satunya tempat berobat ke Rumah Sakit yang ada di daerah Kota Medan.
                        Melihat dengan situasi pelayanan kesehatan di daerah Lubuk Pakam sangat sedikit maka pada Tahun 1991 Ibu Bidan Sauria dengan Bapak Drs.Wasington Purba sepakat medirikan sebuah Rumah Sakit di Lubuk Pakam. Sehingga pada tahun 1990 Klinik Bersalin Tanjung dialihkan Menjadi Rumah Sakit Sari Mutiara Lubuk Pakam yang beralamat di Jl.Medan No.17 Lubuk yang menjadi milik Yayasan Sari Mutiara Medan. oleh Pengurus Yayasan Sari Mutiara Medan mengupayakan menjadi Rumah Sakit Umum Kelas ? D ? (Pratama).
                        Pengurus Yayasan Sari Mutiara Medan bersama Pimpinan Rumah Sakit Umum Sari Mutiara Lubuk Pakam dari tahun ketahun berupaya keras agar Rumah Sakit Umum Sari Mutiara Lubuk Pakam yang awalnya Kelas D (Pratama) dapat ditingkatkan menjadi Kelas C (Madya), pada tanggal 30 Desember tahun 2010 Menteri Kesehatan menetapkan RSU Sari Mutiara Lubuk Pakam menjadi rumah sakit kelas C dengan Nomor surat penetapan No:HK.03.05/I/7904/2010.
                </div>
            </div>
</section>
@endsection