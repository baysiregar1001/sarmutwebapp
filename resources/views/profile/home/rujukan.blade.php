{{-- MELAKUKAN EKSTENSI FILE DARI MAIN --}}
@extends('profile.layouts.main')

{{-- ISI CHILD VIEW --}}
@section('container')
<section id="formrujuk">
    <div class="container align-center">
        <div class="row">
            <div class="col-4 mx-auto mt-3 pt-16">
                <div class="card mb-5 pt-2">
                    <div class="card-body">
                        <h2 class="mb-5 font-bold text-center text-uppercase">Form Rujukan Pasien</h2>
                        <form>
                            <div class="mb-3 mt-3">
                                <label for="namaPasien" class="form-label">Nama Pasien</label>
                                <input type="text" class="form-control" id="namaPasien" aria-describedby="namaPasienHelp">
                                <div id="namaPasienHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="nomorRekamMedis" class="form-label">Masukkan Nomor Rekam Medis</label>
                                <input type="text" class="form-control" id="nomorRekamMedis" aria-describedby="nomorRekamMedisHelp">
                                <div id="nomorRekamMedisHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="tujuanRujukan" class="form-label">Tujuan Rujukan</label>
                                <input type="text" class="form-control" id="tujuanRujukan" aria-describedby="tujuanRujukanHelp">
                                <div id="tujuanRujukanHelp" class="form-text"></div>
                            </div>
                            <a class="btn btn-success" href="#" role="button">Ajukan</a>
                        </form>
                        <div class="mb-3 mt-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">BPJS</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection