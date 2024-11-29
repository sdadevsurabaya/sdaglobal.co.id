@extends('front/layout/layout')
@section('pageStyles')
    <style>
        .page-banner {
            background-position-x: 70%;
            background-image: linear-gradient(to top, white, transparent, transparent), url({{ asset('assets/img/contact/banner-contact.jpg') }})
        }

        @media (min-width: 992px) {
            .page-banner {
                background-image: url({{ asset('assets/img/contact/banner-contact.jpg') }})
            }
        }

        @media (min-width: 576px) {
            #column-address {
                max-width: 420px;
            }
        }
    </style>
@endsection
    @section('content')

    <main class="wrapper">

        <!-- banner -->
        <link rel="stylesheet" href="{{ url('/') }}/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <script src="{{ url('/') }}/sweetalert2/sweetalert2.min.js"></script>
        <script src="{{ url('/') }}/js/karir-banner.js"></script>
        <style>
            .banner>.jumbotron.mb-5 {
                margin-bottom: 2rem !important;
            }

            .btn-outline-dark {
                float: right;
            }
        </style>

        <form id="create_applied" method="POST" action="javascript:void(0)" accept-charset="utf-8"
            enctype="multipart/form-data">
            @csrf
            {{-- <section class="collapse fade show" id="section1" data-parent=".wrapper"> --}}
            <div class="container">
                <div class="alert alert-danger print-error-msg-add" style="display:none">
                    <ul></ul>
                </div>
            </div>
            {{-- </section> --}}

            {{-- section identitas --}}
            <section class="collapse fade show" id="section1" data-parent=".wrapper">
                <div class="container">
                    {{-- <form id="create_applied" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf --}}
                    <h2 class="mb-5">IDENTITAS</h2>
                    <div class="row justify-content-xl-between">
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Position Applied For *</label>
                                <input class="form-control border-0 bg-transparent px-0" type="hidden" name="lang"
                                    id="lang" value="{{ $lang }}"
                                    placeholder="Other (If your position not in listing)" readonly>
                                <input class="form-control border-0 bg-transparent px-0" type="text"
                                    name="position_applied" id="position_applied" value="{{ $posission }}"
                                    placeholder="Other (If your position not in listing)" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Other Position<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="text"
                                    name="other_position" id="other_position"
                                    placeholder="Other (If your position not in listing)">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Lengkap<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="text" name="nama_lengkap"
                                    id="nama_lengkap" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Panggilan<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="text"
                                    name="nama_panggilan" id="nama_panggilan" placeholder="Nama Panggilan">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Tempat, Tanggal lahir<span style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col col-md-6 col-xl-6"><input
                                            class="form-control border-0 bg-transparent px-0" type="text" name="tempat"
                                            id="tempat" placeholder="Contoh: Surabaya">
                                    </div>
                                    <div class="col col-md-6 col-xl-6">
                                        {{-- <input class="datepic form-control border-0 bg-transparent px-0" type="date"
                                            name="tanggal_lahir" id="tanggal_lahir" placeholder="Contoh: 01-01-2023"> --}}
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control border-0 bg-transparent px-0" name="tanggal_lahir" id="tanggal_lahir" placeholder="Contoh : 2001-12-01">
                                            <span class="input-group-append d-none">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="bi bi-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Jenis Kelamin<span style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="kelamin-laki-laki" value="Laki-laki">
                                            <label class="form-check-label" for="kelamin-laki-laki">
                                                Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="kelamin-perempuan" value="Perempuan">
                                            <label class="form-check-label" for="kelamin-perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Kewarganegaraan</label>
                                <input class="form-control border-0 bg-transparent px-0" type="text"
                                    name="kewarganegaraan" id="kewarganegaraan" value="Indonesia" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="agama">Agama<span style="color: red">*</span></label>
                                <select class="form-control border-0" id="agama" name="agama">
                                    <option value="0">--Select Agama--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">No. KTP<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="number" name="no_ktp"
                                    id="no_ktp" placeholder="No. KTP">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Passport / No. SIM</label>
                                <input class="form-control border-0 bg-transparent px-0" type="number"
                                    name="passport_no_sim" id="passport_no_sim" placeholder="Passport / No. SIM">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Alamat KTP<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="text" name="alamat_ktp"
                                    id="alamat_ktp" placeholder="Alamat KTP">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">No. NPWP</label>
                                <input class="form-control border-0 bg-transparent px-0" type="number" name="no_npwp"
                                    id="no_npwp" placeholder="No. NPWP">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Alamat Domisili<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="text"
                                    name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Domisili">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Email<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="email" name="email"
                                    id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">No. Telp. Rumah</label>
                                <input class="form-control border-0 bg-transparent px-0" type="number"
                                    name="no_telp_rumah" id="no_telp_rumah" placeholder="No. Telp. Rumah">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">No. Telp. HP<span style="color: red">*</span></label>
                                <input class="form-control border-0 bg-transparent px-0" type="number" name="no_telp_hp"
                                    id="no_telp_hp" placeholder="No. Telp. HP">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="mb-2">Status Rumah<span
                                        style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_rumah"
                                                id="rumah-pribadi" value="Pribadi">
                                            <label class="form-check-label" for="rumah-pribadi">
                                                Pribadi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_rumah"
                                                id="rumah-ortu" value="Orang Tua">
                                            <label class="form-check-label" for="rumah-ortu">
                                                Orang Tua
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_rumah"
                                                id="rumah-kontrak" value="Kontrak">
                                            <label class="form-check-label" for="rumah-kontrak">
                                                Kontrak
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_rumah"
                                                id="rumah-kost" value="Kost">
                                            <label class="form-check-label" for="rumah-kost">
                                                Kost
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <b> Note : (<span style="color: red">*</span>) Wajib di isi. </b>
                        </div>
                        <div class="form-group col-12 pt-5">
                            <div class="row">
                                <div class="col-auto mx-sm-auto">
                                    <a class="btn btn-outline-dark btn-block" style="min-width: 260px;"
                                        data-toggle="collapse" href="#section2">Lanjutkan >></a>
                                    {{-- <button type="submit" class="btn btn-outline-dark btn-block mt-0">Lamar</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </section>

            {{-- section family --}}
            <section class="collapse fade" id="section2" data-parent=".wrapper">
                <div class="container">
                    {{-- <form id="create_family" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data"> --}}
                    {{-- @csrf --}}
                    <h2 class="mb-5">KELUARGA & LINGKUNGAN</h2>
                    <div class="form-group mb-5">
                        <label for="" class="mb-2">Status Pernikahan<span style="color: red">*</span></label>
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_pernikahan"
                                        id="status-single" value="Single">
                                    <label class="form-check-label" for="status-single">
                                        Single
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_pernikahan"
                                        id="status-menikah" value="Menikah">
                                    <label class="form-check-label" for="status-menikah">
                                        Menikah
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_pernikahan"
                                        id="status-duda-janda" value="Duda / Janda">
                                    <label class="form-check-label" for="status-duda-janda">
                                        Duda / Janda
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-3">Susunan Keluarga (Ayah)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0" name="nama_ayah"
                                    id="nama_ayah" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Pekerjaan<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Pendidikan<span style="color: red">*</span></label>
                                <select class="form-control border-0" id="pendidikan_ayah" name="pendidikan_ayah">
                                    <option value="0">--Select Pendidikan--</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="S1">S1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-3">Susunan Keluarga (Ibu)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0" name="nama_ibu"
                                    id="nama_ibu" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Pekerjaan<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Pendidikan<span style="color: red">*</span></label>
                                <select class="form-control border-0" id="pendidikan_ibu" name="pendidikan_ibu">
                                    <option value="0">--Select Pendidikan--</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="S1">S1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="saudara_1">
                        <h5 class="mb-3">Susunan Keluarga (Saudara 1)</h5>
                        <div class="row justify-content-xl-between mb-3">
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control border-0 bg-transparent px-0"
                                        name="nama_saudara_1" id="nama_saudara_1" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group">
                                    <label for="" class="mb-2">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jenis_kelamin_saudara_1" id="jenis_kelamin_laki_laki_saudara_1"
                                                    value="Laki-laki">
                                                <label class="form-check-label" for="jenis_kelamin_laki_laki_saudara_1">
                                                    Laki-laki
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jenis_kelamin_saudara_1" id="jenis_kelamin_perempuan_saudara_1"
                                                    value="Perempuan">
                                                <label class="form-check-label" for="jenis_kelamin_perempuan_saudara_1">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" id="btn_remove_saudara_1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Pekerjaan</label>
                                    <input type="text" class="form-control border-0 bg-transparent px-0"
                                        name="pekerjaan_saudara_1" id="pekerjaan_saudara_1" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Pendidikan</label>
                                    <select class="form-control border-0" id="pendidikan_saudara_1"
                                        name="pendidikan_saudara_1">
                                        <option value="0">--Select Pendidikan--</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="S1">S1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="htmlstringsaudara"></div>

                    <div class="mb-5">
                        <button type="button" class="text-dark" id="add-saudara">
                            <i><u>Tambah Saudara+</u></i>
                        </button>
                    </div>

                    <h5 class="mb-3">Susunan Keluarga bagi yang Menikah (Suami/Istri)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nama_pasangan" id="nama_pasangan" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Jenis Kelamin</label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin_pasangan"
                                                id="kelamin_laki_laki_pasangan" value="Laki-laki">
                                            <label class="form-check-label" for="kelamin_laki_laki_pasangan">
                                                Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin_pasangan"
                                                id="kelamin_perempuan_pasangan" value="Perempuan">
                                            <label class="form-check-label" for="kelamin_perempuan_pasangan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Pekerjaan</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="pekerjaan_pasangan" id="pekerjaan_pasangan" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Pendidikan</label>
                                <select class="form-control border-0" id="pendidikan_pasangan"
                                    name="pendidikan_pasangan">
                                    <option value="0">--Select Pendidikan--</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="S1">S1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="anak_1">
                        <h5 class="mb-3">Susunan Keluarga (Anak 1)</h5>
                        <div class="row justify-content-xl-between mb-3">

                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control border-0 bg-transparent px-0"
                                        name="nama_anak_1" id="nama_anak_1" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group">
                                    <label for="" class="mb-2">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jenis_kelamin_anak_1" id="kelamin_laki_laki_anak_1"
                                                    value="Laki-laki">
                                                <label class="form-check-label" for="kelamin_laki_laki_anak_1">
                                                    Laki-laki
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jenis_kelamin_anak_1" id="kelamin_perempuan_anak_1"
                                                    value="Perempuan">
                                                <label class="form-check-label" for="kelamin_perempuan_anak_1">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" id="btn_remove_anak_1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Pekerjaan</label>
                                    <input type="text" class="form-control border-0 bg-transparent px-0"
                                        name="pekerjaan_anak_1" id="pekerjaan_anak_1" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Pendidikan</label>
                                    <select class="form-control border-0" id="pendidikan_anak_1"
                                        name="pendidikan_anak_1">
                                        <option value="0">--Select Pendidikan--</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="S1">S1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="htmlstringanak"></div>

                    <div class="mb-5">
                        <button type="button" class="text-dark" id="add-anak">
                            <i><u>Tambah Anak+</u></i>
                        </button>
                    </div>

                    <div>
                        <b> Note : (<span style="color: red">*</span>) Wajib di isi. </b>
                    </div>

                    <div class="pt-5">
                        <div class="row">
                            <div class="col col-12 col-md-8 col-lg-7 col-xl-6 mx-auto d-flex flex-wrap flex-nowrap align-items-center w-100"
                                style="column-gap: 1rem">
                                <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#section1">
                                    << Kembali</a>
                                        <a class="btn btn-outline-dark btn-block mt-0" data-toggle="collapse"
                                            href="#section3">Lanjutkan >></a>
                            </div>
                        </div>
                    </div>

                    {{-- </form> --}}
                </div>
            </section>

            {{-- section education --}}
            <section class="collapse fade" id="section3" data-parent=".wrapper">
                <div class="container">
                    {{-- <form id="create_education" method="POST" action="javascript:void(0)" accept-charset="utf-8" enctype="multipart/form-data"> --}}
                    {{-- @csrf --}}
                    <h2 class="mb-5">RIWAYAT PENDIDIKAN FORMAL</h2>

                    <h5 class="mb-3">Jenjang Pendidikan (SLTA / SMA / MA)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Sekolah<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nama_sekolah_slta" id="nama_sekolah_slta" placeholder="Nama Sekolah">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Status Kelulusan<span
                                        style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_slta"
                                                id="status-lulus-slta" value="Lulus">
                                            <label class="form-check-label" for="status-lulus-slta">
                                                Lulus
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_slta"
                                                id="status-tidak-lulus-slta" value="Tidak Lulus">
                                            <label class="form-check-label" for="status-tidak-lulus-slta">
                                                Tidak Lulus
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Prodi / Jurusan<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="prodi_jurusan_slta" id="prodi_jurusan_slta" placeholder="Prodi / Jurusan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nilai / IPK<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nilai_ipk_slta" id="nilai_ipk_slta" placeholder="Ex: 35.5">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Tahun Studi<span style="color: red">*</span></label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="tahun_studi_slta" id="tahun_studi_slta" placeholder="ex: 2020-2024">
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-3">Jenjang Pendidikan (S1)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Universitas</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nama_universitas_s1" id="nama_universitas_s1" placeholder="Nama Universitas">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Status Kelulusan</label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_s1"
                                                id="status-lulus-s1" value="Lulus">
                                            <label class="form-check-label" for="status-lulus-s1">
                                                Lulus
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_s1"
                                                id="status-tidak-lulus-s1" value="Tidak Lulus">
                                            <label class="form-check-label" for="status-tidak-lulus-s1">
                                                Tidak Lulus
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Prodi / Jurusan</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="prodi_jurusan_s1" id="prodi_jurusan_s1" placeholder="Prodi / Jurusan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nilai / IPK</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nilai_ipk_s1" id="nilai_ipk_s1" placeholder="ex: 3.5">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Tahun Studi</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="tahun_studi_s1" id="tahun_studi_s1" placeholder="ex: 2018-2022">
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-3">Jenjang Pendidikan (S2)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Universitas</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nama_universitas_s2" id="nama_universitas_s2" placeholder="Nama Universitas">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Status Kelulusan</label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_s2"
                                                id="status-lulus-s2" value="Lulus">
                                            <label class="form-check-label" for="status-lulus-s2">
                                                Lulus
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_s2"
                                                id="status-tidak-lulus-s2" value="Tidak Lulus">
                                            <label class="form-check-label" for="status-tidak-lulus-s2">
                                                Tidak Lulus
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Prodi / Jurusan</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="prodi_jurusan_s2" id="prodi_jurusan_s2" placeholder="Prodi / Jurusan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nilai / IPK</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nilai_ipk_s2" id="nilai_ipk_s2" placeholder="ex: 3.87">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Tahun Studi</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="tahun_studi_s2" id="tahun_studi_s2" placeholder="ex: 2018-2022">
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-3">Jenjang Pendidikan (Akademi / Kursus)</h5>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Lembaga</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nama_lembaga_kursus" id="nama_lembaga_kursus" placeholder="Nama Lembaga">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Status Kelulusan</label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_kursus"
                                                id="status-lulus-kursus" value="Lulus">
                                            <label class="form-check-label" for="status-lulus-kursus">
                                                Lulus
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_kelulusan_kursus"
                                                id="status-tidak-lulus-kursus" value="Tidak Lulus">
                                            <label class="form-check-label" for="status-tidak-lulus-kursus">
                                                Tidak Lulus
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Prodi / Jurusan</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="prodi_jurusan_kursus" id="prodi_jurusan_kursus" placeholder="Prodi / Jurusan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nilai / IPK</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="nilai_ipk_kursus" id="nilai_ipk_kursus" placeholder="ex: 70">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Tahun Studi</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="tuhun_studi_kursus" id="tuhun_studi_kursus" placeholder="ex: 2022-2023">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Prestasi</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0" name="prestasi"
                                    id="prestasi" placeholder="Prestasi">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Karya ilmiah yang pernah dibuat</label>
                                <input type="text" class="form-control border-0 bg-transparent px-0"
                                    name="karya_ilmiah" id="karya_ilmiah" placeholder="Nama Karya">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <b> Note : (<span style="color: red">*</span>) Wajib di isi. </b>
                    </div>
                    <div class="pt-5">
                        <div class="row">
                            <div class="col col-12 col-md-8 col-lg-7 col-xl-6 mx-auto d-flex flex-wrap flex-nowrap align-items-center w-100"
                                style="column-gap: 1rem">
                                <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#section2">
                                    << Kembali</a>
                                        <a class="btn btn-outline-dark btn-block mt-0" data-toggle="collapse"
                                            href="#section4">Lanjutkan >></a>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </section>

            {{-- section education non formal --}}
            <section class="collapse fade" id="section4" data-parent=".wrapper">
                <div class="container">
                    {{-- <form action=""> --}}
                    <h2 class="mb-5">RIWAYAT PENDIDIKAN NON FORMAL</h2>
                    <div id="organisasi_1">
                        <h5 class="mb-3">Pendidikan Non Formal (Organisasi / Pelatihan 1)</h5>
                        <div class="row justify-content-xl-between mb-3">
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Organisasi / Pelatihan</label>
                                    <input type="text" name="name_organisasi_1" id="name_organisasi_1"
                                        class="form-control border-0 bg-transparent px-0"
                                        placeholder="Organisasi / Pelatihan">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan_1" id="jabatan_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Jabatan">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Bidang</label>
                                    <input type="text" name="bidang_1" id="bidang_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Bidang">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Periode</label>
                                    <input type="text" name="periode_1" id="periode_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Periode">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12" id="btn_remove_organisasi_1">

                            </div>
                        </div>
                    </div>

                    <div id="htmlstringorganisasi"></div>

                    <div class="mb-5">
                        <button type="button" class="text-dark" id="add-organisasi">
                            <i><u>Tambah Organisasi / Pelatihan+</u></i>
                        </button>
                    </div>

                    <h2 class="mb-5">KEMAMPUAN BAHASA</h2>
                    <div id="bahasa_1">
                        <h5 class="mb-3">Kemampuan Bahasa (Bahasa 1)</h5>
                        <div class="row justify-content-xl-between mb-3">
                            <div class="col-lg-12">
                                <div class="form-group border-bottom">
                                    <label for="">Bahasa</label>
                                    <input type="text" name="name_bahasa_1" id="name_bahasa_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Bahasa">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group">
                                    <label for="" class="mb-2">Tertulis</label>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tertulis_1"
                                                    id="bahasa-tulis-baik" value="Baik">
                                                <label class="form-check-label" for="bahasa-tulis-baik">
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tertulis_1"
                                                    id="bahasa-tulis-cukup" value="Cukup">
                                                <label class="form-check-label" for="bahasa-tulis-cukup">
                                                    Cukup
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="tertulis_1"
                                                    id="bahasa-tulis-kurang" value="Kurang">
                                                <label class="form-check-label" for="bahasa-tulis-kurang">
                                                    Kurang
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group">
                                    <label for="" class="mb-2">Lisan</label>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lisan_1"
                                                    id="bahasa-lisan-baik" value="Baik">
                                                <label class="form-check-label" for="bahasa-lisan-baik">
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lisan_1"
                                                    id="bahasa-lisan-cukup" value="Cukup">
                                                <label class="form-check-label" for="bahasa-lisan-cukup">
                                                    Cukup
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lisan_1"
                                                    id="bahasa-lisan-kurang" value="Kurang">
                                                <label class="form-check-label" for="bahasa-lisan-kurang">
                                                    Kurang
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group border-bottom">
                                    <label for="">Keterangan</label>
                                    <input type="text" name="keterangan_1" id="keterangan_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Keterangan">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12" id="btn_remove_bahasa_1">

                            </div>
                        </div>
                    </div>

                    <div id="htmlstringbahasa"></div>

                    <div class="mb-5">
                        <button type="button" class="text-dark" id="add-bahasa">
                            <i><u>Tambah Bahasa+</u></i>
                        </button>
                    </div>

                    <h2 class="mb-5">REFERENSI</h2>
                    <div class="row justify-content-xl-between mb-3">
                        <div class="col-lg-12">
                            <div class="form-group border-bottom">
                                <label for="">Nama</label>
                                <input type="text" name="name_referensi" id="name_referensi"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group border-bottom">
                                <label for="">Telepon / HP</label>
                                <input type="number" name="telepon" id="telepon"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Telepon / HP">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group border-bottom">
                                <label for="">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group border-bottom">
                                <label for="">Hubungan</label>
                                <input type="text" name="hubungan" id="hubungan"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Hubungan">
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-5">RIWAYAT PEKERJAAN</h2>
                    <div class="row justify-content-xl-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Perusahaan</label>
                                <input type="text" name="name_perusahaan" id="name_perusahaan"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Nama Perusahaan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5"></div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Periode Awal</label>
                                <input type="date" name="periode_awal" id="periode_awal"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Periode Awal">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Periode Akhir</label>
                                <input type="date" name="periode_akhir" id="periode_akhir"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Periode Akhir">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Jabatan Awal</label>
                                <input type="text" name="jabatan_awal" id="jabatan_awal"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Jabatan Awal">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Jabatan Akhir</label>
                                <input type="text" name="jabatan_akhir" id="jabatan_akhir"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Jabatan Akhir">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Jenis Usaha</label>
                                <input type="text" name="jenis_usaha" id="jenis_usaha"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Jenis Usaha">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Gaji Terakhir</label>
                                <input type="number" name="gaji_terakhir" id="gaji_terakhir"
                                    class="form-control border-0 bg-transparent px-0" placeholder="ex: 1000000">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Nama Atasan</label>
                                <input type="text" name="name_atasan" id="name_atasan"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Nama Atasan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Alasan Berhenti</label>
                                <input type="text" name="alasan_berhenti" id="alasan_berhenti"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Alasan Berhenti">
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="row">
                            <div class="col col-12 col-md-8 col-lg-7 col-xl-6 mx-auto d-flex flex-wrap flex-nowrap align-items-center w-100"
                                style="column-gap: 1rem">
                                <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#section3">
                                    << Kembali</a>
                                        <a class="btn btn-outline-dark btn-block mt-0" data-toggle="collapse"
                                            href="#section5">Lanjutkan >></a>
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>
            </section>

            {{-- section near family --}}
            <section class="collapse fade" id="section5" data-parent=".wrapper">
                <div class="container">
                    {{-- <form action=""> --}}
                    <h2 class="mb-5">KELUARGA YANG BISA DIHUBUNGI</h2>
                    <div id="bahasa_1">
                        <h5 class="mb-3">Keluarga Yang Bisa Dihubungi (Keluraga 1)</h5>
                        <div class="row justify-content-xl-between mb-3">
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Nama<span style="color: red">*</span></label>
                                    <input type="text" name="name_near_family_1" id="name_near_family_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Telepon<span style="color: red">*</span></label>
                                    <input type="text" name="telepon_near_family_1" id="telepon_near_family_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Telepon">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Pekerjaan<span style="color: red">*</span></label>
                                    <input type="text" name="pekerjaan_near_family_1" id="pekerjaan_near_family_1"
                                        class="form-control border-0 bg-transparent px-0" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-5">
                                <div class="form-group border-bottom">
                                    <label for="">Hubungan Keluarga<span style="color: red">*</span></label>
                                    <input type="text" name="hubungan_near_family_1" id="hubungan_near_family_1"
                                        class="form-control border-0 bg-transparent px-0"
                                        placeholder="Hubungan Keluarga">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12" id="btn_remove_keluarga_1">

                            </div>
                        </div>
                    </div>

                    <div id="htmlstringkeluarga"></div>

                    <div class="mb-5">
                        <button type="button" class="text-dark" id="add-keluarga">
                            <i><u>Tambah keluarga yang bisa dihubungi+</u></i>
                        </button>
                    </div>

                    <h2 class="mb-5">RIWAYAT KESEHATAN</h2>
                    <div class="row justify-content-xl-between mb-3">
                        <div class="col-lg-12">
                            <div class="form-group border-bottom">
                                <label for="">Tinggi Badan (cm)<span style="color: red">*</span></label>
                                <input type="text" name="tinggi_badan" id="tinggi_badan"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Tinggi Badan">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group border-bottom">
                                <label for="">Berat Badan (kg)<span style="color: red">*</span></label>
                                <input type="text" name="berat_badan" id="berat_badan"
                                    class="form-control border-0 bg-transparent px-0" placeholder="Berat Badan">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Merokok<span style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_merokok"
                                                id="merokok-ya" value="Ya">
                                            <label class="form-check-label" for="merokok-ya">Ya</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_merokok"
                                                id="merokok-tidak" value="Tidak">
                                            <label class="form-check-label" for="merokok-tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="form-group border-bottom">
                                <label for="">Jenis penyakit yang pernah diderita<span
                                        style="color: red">*</span></label>
                                <input type="text" name="penyakit" id="penyakit"
                                    class="form-control border-0 bg-transparent px-0"
                                    placeholder="Pisahkan Menggunakan Tanda Koma (,)">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <b> Note : (<span style="color: red">*</span>) Wajib di isi. </b>
                    </div>
                    <div class="pt-5">
                        <div class="row">
                            <div class="col col-12 col-md-8 col-lg-7 col-xl-6 mx-auto d-flex flex-wrap flex-nowrap align-items-center w-100"
                                style="column-gap: 1rem">
                                <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#section4">
                                    << Kembali</a>
                                        <a class="btn btn-outline-dark btn-block mt-0" data-toggle="collapse"
                                            href="#section6">Lanjutkan >></a>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </section>

            {{-- section statement --}}
            <section class="collapse fade" id="section6" data-parent=".wrapper">
                <div class="container">
                    {{-- <form action=""> --}}
                    <h2 class="mb-5">PERNYATAAN PRIBADI</h2>
                    <div class="form-group border-bottom">
                        <label for="peryataan1">Berikan alasan / tujuan Anda melamar di Perusahaan ini?<span
                                style="color: red">*</span></label>
                        <textarea name="peryataan1" class="form-control border-0 bg-transparent px-0" id="peryataan1" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="peryataan2">Berikan uraian mengenai pekerjaan / jabatan yang paling berkesan dalam
                            hidup Anda dan mengapa?<span style="color: red">*</span></label>
                        <textarea name="peryataan2" class="form-control border-0 bg-transparent px-0" id="peryataan2" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="peryataan3">Pernakah Anda melakukan perubahan / pembaharuan di perusahaan - perusahaan
                            terdahulu? Seperti apa perubahasan tersebut?<span style="color: red">*</span></label>
                        <textarea name="peryataan3" class="form-control border-0 bg-transparent px-0" id="peryataan3" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="peryataan4">Apakah Anda merasa puas dengan kemajuan yang anda capai pada pekerjaan -
                            pekerjaan terdahulu? Mengapa?<span style="color: red">*</span></label>
                        <textarea name="peryataan4" class="form-control border-0 bg-transparent px-0" id="peryataan4" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="peryataan5">Deskripsikan sifat-sifat / kepribadian Saudara baik yang sifat positif(+)
                            dan yang negatif(-)?<span style="color: red">*</span></label>
                        <textarea name="peryataan5" class="form-control border-0 bg-transparent px-0" id="peryataan5" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="peryataan6">Hobby dan kegiatan di waktu luang?<span
                                style="color: red">*</span></label>
                        <textarea name="peryataan6" class="form-control border-0 bg-transparent px-0" id="peryataan6" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom mb-3">
                        <label for="peryataan7">Apa yang anda ketahui tentang indraco?<span
                                style="color: red">*</span></label>
                        <textarea name="peryataan7" class="form-control border-0 bg-transparent px-0" id="peryataan7" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>

                    <b> Note : (<span style="color: red">*</span>) Wajib di isi. </b>

                    <div class="pt-5">
                        <div class="row">
                            <div class="col col-12 col-md-8 col-lg-7 col-xl-6 mx-auto d-flex flex-wrap flex-nowrap align-items-center w-100"
                                style="column-gap: 1rem">
                                <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#section5">
                                    << Kembali</a>
                                        <a class="btn btn-outline-dark btn-block mt-0" data-toggle="collapse"
                                            href="#section7">Lanjutkan >></a>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </section>

            {{-- section agreement --}}
            <section class="collapse fade" id="section7" data-parent=".wrapper">
                <div class="container">
                    {{-- <form action=""> --}}
                    <h2 class="mb-5">PERSETUJUAN-PERSETUJUAN</h2>
                    <div class="form-group border-bottom">
                        <label for="persetujuan1">Apakah anda bersedia kerja lebih dari jam kerja yang ditentukan?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan1" class="form-control border-0 bg-transparent px-0" id="persetujuan1" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan2">Apakah anda bersedia dinas keluar kota?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan2" class="form-control border-0 bg-transparent px-0" id="persetujuan2" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan3">Apakah anda siap ditempatkan di seluruh unit Indraco Group?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan3" class="form-control border-0 bg-transparent px-0" id="persetujuan3" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan4">Mengapa anda ingin bergabung dengan perusahaan kami?<span
                                style="color: red">*</span><span style="color: red">*</span></label>
                        <textarea name="persetujuan4" class="form-control border-0 bg-transparent px-0" id="persetujuan4" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan5">Nilai lebih apa yang dapat anda tawarkan kepada kami, dan berguna bagi
                            perusahaan kami?<span style="color: red">*</span></label>
                        <textarea name="persetujuan5" class="form-control border-0 bg-transparent px-0" id="persetujuan5" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan6">Pekerjaan apa yang anda tidak sukai?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan6" class="form-control border-0 bg-transparent px-0" id="persetujuan6" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan7">Apakah anda masih terikat dengan perusahaan lain?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan7" class="form-control border-0 bg-transparent px-0" id="persetujuan7" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan8">Apakah anda memiliki pekerjaan sampingan? Jelaskan!<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan8" class="form-control border-0 bg-transparent px-0" id="persetujuan8" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan9">Apakah anda memiliki kendaraan pribadi?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan9" class="form-control border-0 bg-transparent px-0" id="persetujuan9" rows="1"
                            placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan10">SIM apa yang anda miliki?<span style="color: red">*</span></label>
                        <textarea name="persetujuan10" class="form-control border-0 bg-transparent px-0" id="persetujuan10"
                            rows="1" placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan11">Kapan anda siap bergabung dengan perusahaan kami?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan11" class="form-control border-0 bg-transparent px-0" id="persetujuan11"
                            rows="1" placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan12">Apakah anda bersedia dengan status kerja kontrak<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan12" class="form-control border-0 bg-transparent px-0" id="persetujuan12"
                            rows="1" placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="persetujuan13">Apakah anda bersedia minitipkan ijasah asli terakhir?<span
                                style="color: red">*</span></label>
                        <textarea name="persetujuan13" class="form-control border-0 bg-transparent px-0" id="persetujuan13"
                            rows="1" placeholder="Jelaskan"></textarea>
                    </div>

                    <h2 class="mb-5">POSISI TERAKHIR</h2>
                    <div class="form-group border-bottom">
                        <label for="struktur_organisasi">Jelaskan struktur organisasi posisi Saudara di perusahaan
                            terakhir tempat anda bekerja!</label>
                        <textarea name="struktur_organisasi" class="form-control border-0 bg-transparent px-0" id="struktur_organisasi"
                            rows="1" placeholder="Jelaskan"></textarea>
                    </div>
                    <div class="form-group border-bottom">
                        <label for="tugas_dan_tanggung_jawab">Jelaskan Tugas dan Tanggung Jawab yang dikerjakan!</label>
                        <textarea name="tugas_dan_tanggung_jawab" class="form-control border-0 bg-transparent px-0"
                            id="tugas_dan_tanggung_jawab" rows="1" placeholder="Jelaskan"></textarea>
                    </div>

                    <h2 class="mb-5">PERNYATAAN</h2>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input"
                            value="keterangan yang saya berikan adalah benar" name="pernyataan" id="pernyataan"
                            required>
                        <label class="form-check-label" for="pernyataan">
                            Dengan ini saya menyatakan bahwa keterangan yang saya berikan adalah benar. Apabila ada
                            keterangan yang tidak benar dan dapat merugikan perusahaan, maka saya siap untuk dikeluarkan
                            secara sepihak oleh perusahaan.<span style="color: red">*</span>
                        </label>
                    </div>

                    <b> Note : (<span style="color: red">*</span>) Wajib di isi. </b>

                    <div class="pt-5">
                        <div class="row">
                            <div class="col col-12 col-md-8 col-lg-7 col-xl-6 mx-auto d-flex flex-wrap flex-nowrap align-items-center w-100"
                                style="column-gap: 1rem">
                                <a class="btn btn-outline-dark btn-block" data-toggle="collapse" href="#section6">
                                    << Kembali</a>
                                        {{-- <a class="btn btn-outline-dark btn-block mt-0" data-toggle="collapse" href="#">Lamar >></a> --}}
                                        <button type="submit"
                                            class="btn btn-outline-dark btn-block mt-0">Lamar</button>
                            </div>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </section>

        </form>

    </main>
    {{-- <script>
       $(function() {
            $('#datepicker').datepicker({format: 'yyyy-mm-dd'});
        });

        // ==============================================
        // variabel gelobal
        var jumlahSaudara = 1;
        var jumlahAnak = 1;
        var jumalahOrganisasi = 1;
        var jumlahBahasa = 1;
        var jumlahKeluarga = 1;
        // ==============================================

        // ==============================================
        // remove saudara
        function remove_saudara(btn) {
            let div = document.getElementById("saudara_" + btn);
            div.remove();

            var previous_btn = btn - 1;
            document.getElementById("btn_remove_saudara_" + previous_btn).style.display = "block";
        }

        // btn remove saudara
        function function_btn_remove_saudara(jumlahSaudara) {
            // console.log(i);
            var previous_btn = jumlahSaudara - 1;
            document.getElementById("btn_remove_saudara_" + previous_btn).style.display = "none";

            if (jumlahSaudara == 4) {
                document.getElementById("add-saudara").disabled = true;
            }
        }

        // remove anak
        function remove_anak(btn) {
            let div = document.getElementById("anak_" + btn);
            div.remove();

            var previous_btn = btn - 1;
            document.getElementById("btn_remove_anak_" + previous_btn).style.display = "block";
        }

        // btn remove anak
        function function_btn_remove_anak(jumlahAnak) {
            // console.log(j);
            var previous_btn = jumlahAnak - 1;
            document.getElementById("btn_remove_anak_" + previous_btn).style.display = "none";

            if (jumlahAnak == 4) {
                document.getElementById("add-anak").disabled = true;
            }
        }

        // remove organisasi
        function remove_organisasi(btn) {
            let div = document.getElementById("organisasi_" + btn);
            div.remove();

            var previous_btn = btn - 1;
            document.getElementById("btn_remove_organisasi_" + previous_btn).style.display = "block";
        }

        // btn remove organisasi
        function function_btn_remove_organisasi(jumlahOrganisasi) {
            console.log(jumalahOrganisasi);
            var previous_btn = jumalahOrganisasi - 1;
            document.getElementById("btn_remove_organisasi_" + previous_btn).style.display = "none";

            if (jumalahOrganisasi == 3) {
                document.getElementById("add-organisasi").disabled = true;
            }
        }

        // remove bahasa
        function remove_bahasa(btn) {
            let div = document.getElementById("bahasa_" + btn);
            div.remove();

            var previous_btn = btn - 1;
            document.getElementById("btn_remove_bahasa_" + previous_btn).style.display = "block";
        }

        // btn remove bahasa
        function function_btn_remove_bahasa(jumlahBahasa) {
            // console.log(jumlahBahasa);
            var previous_btn = jumlahBahasa - 1;
            document.getElementById("btn_remove_bahasa_" + previous_btn).style.display = "none";

            if (jumlahBahasa == 3) {
                document.getElementById("add-bahasa").disabled = true;
            }
        }

        // remove keluarga
        function remove_keluarga(btn) {
            let div = document.getElementById("keluarga_" + btn);
            div.remove();

            var previous_btn = btn - 1;
            document.getElementById("btn_remove_keluarga_" + previous_btn).style.display = "block";
        }

        // btn remove keluarga
        function function_btn_remove_keluarga(jumlahKeluarga) {
            console.log(jumlahKeluarga);
            var previous_btn = jumlahKeluarga - 1;
            document.getElementById("btn_remove_keluarga_" + previous_btn).style.display = "none";

            if (jumlahKeluarga == 2) {
                document.getElementById("add-keluarga").disabled = true;
            }
        }
        // ==============================================

        // ==============================================
        //add saudara
        $("#add-saudara").click(function() {
            jumlahSaudara++;
            function_btn_remove_saudara(jumlahSaudara);
            var rows = `<div id="saudara_${jumlahSaudara}">
                <h5 class="mb-3">Susunan Keluarga (Saudara ${jumlahSaudara})</h5>
                <div class="row justify-content-xl-between mb-3">
                    <div class="col-lg-6 col-xl-5">
                    <div class="form-group border-bottom">
                        <label for="">Nama</label>
                        <input type="text" class="form-control border-0 bg-transparent px-0" name="nama_saudara_${jumlahSaudara}" id="nama_saudara_${jumlahSaudara}" placeholder="Nama">
                    </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                    <div class="form-group">
                        <label for="" class="mb-2">Jenis Kelamin</label>
                        <div class="row">
                            <div class="col-auto">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin_saudara_${jumlahSaudara}" id="jenis_kelamin_laki_laki_saudara_${jumlahSaudara}"
                                    value="Laki-laki">
                                <label class="form-check-label" for="jenis_kelamin_laki_laki_saudara_${jumlahSaudara}">
                                    Laki-laki
                                </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin_saudara_${jumlahSaudara}" id="jenis_kelamin_perempuan_saudara_${jumlahSaudara}"
                                    value="Perempuan">
                                <label class="form-check-label" for="jenis_kelamin_perempuan_saudara_${jumlahSaudara}">
                                    Perempuan
                                </label>
                                </div>
                            </div>
                            <div class="col-lg-6" id="btn_remove_saudara_${jumlahSaudara}">
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                    <div class="form-group border-bottom">
                        <label for="">Pekerjaan</label>
                        <input type="text" class="form-control border-0 bg-transparent px-0" name="pekerjaan_saudara_${jumlahSaudara}" id="pekerjaan_saudara_${jumlahSaudara}" placeholder="Pekerjaan">
                    </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                    <div class="form-group border-bottom">
                        <label for="">Pendidikan</label>
                        <select class="form-control border-0" id="pendidikan_saudara_${jumlahSaudara}" name="pendidikan_saudara_${jumlahSaudara}">
                            <option value="">--Select Pendidikan--</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="S1">S1</option>
                        </select>
                    </div>
                    </div>
                </div>
            </div>`;
            $(rows)
                .fadeIn("fast")
                .appendTo("#htmlstringsaudara");
            return false;
        });

        //add anak
        $("#add-anak").click(function() {
            var rows = ``;
            jumlahAnak++;
            function_btn_remove_anak(jumlahAnak);
            rows += ` <div id="anak_${jumlahAnak}">
        <h5 class="mb-3">Susunan Keluarga (Anak ${jumlahAnak})</h5>
          <div class="row justify-content-xl-between mb-3">
            <div class="col-lg-6 col-xl-5">
               <div class="form-group border-bottom">
                  <label for="">Nama</label>
                  <input type="text" class="form-control border-0 bg-transparent px-0" name="nama_anak_${jumlahAnak}" id="nama_anak_${jumlahAnak}" placeholder="Nama">
               </div>
            </div>
            <div class="col-lg-6 col-xl-5">
               <div class="form-group">
                  <label for="" class="mb-2">Jenis Kelamin</label>
                  <div class="row">
                        <div class="col-auto">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin_anak_${jumlahAnak}" id="kelamin_laki_laki_anak_${jumlahAnak}"
                                value="Laki-laki">
                            <label class="form-check-label" for="kelamin_laki_laki_anak_${jumlahAnak}">
                                Laki-laki
                            </label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin_anak_${jumlahAnak}" id="kelamin_perempuan_anak_${jumlahAnak}"
                                value="Perempuan">
                            <label class="form-check-label" for="kelamin_perempuan_anak_${jumlahAnak}">
                                Perempuan
                            </label>
                            </div>
                        </div>
                        <div class="col-lg-6" id="btn_remove_anak_${jumlahAnak}">
                            <div class="col-auto">

                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                <div class="form-group border-bottom">
                    <label for="">Pekerjaan</label>
                    <input type="text" class="form-control border-0 bg-transparent px-0" name="pekerjaan_anak_${jumlahAnak}" id="pekerjaan_anak_${jumlahAnak}" placeholder="Pekerjaan">
                </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                <div class="form-group border-bottom">
                    <label for="">Pendidikan</label>
                    <select class="form-control border-0" id="pendidikan_anak_${jumlahAnak}" name="pendidikan_anak_${jumlahAnak}">
                        <option value="">--Select Pendidikan--</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="S1">S1</option>
                    </select>
                </div>
                </div>
            </div>
        </div>`;
            $(rows)
                .fadeIn("fast")
                .appendTo("#htmlstringanak");
            return false;
        });

        // add organisasi
        $("#add-organisasi").click(function() {
            var rows = ``;
            jumalahOrganisasi++;
            function_btn_remove_organisasi(jumalahOrganisasi);
            rows += ` <div id="organisasi_${jumalahOrganisasi}">
                <h5 class="mb-3">Pendidikan Non Formal (Organisasi / Pelatihan ${jumalahOrganisasi})</h5>
                <div class="row justify-content-xl-between mb-3">
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Organisasi / Pelatihan</label>
                            <input type="text" name="name_organisasi_${jumalahOrganisasi}" id="name_organisasi_${jumalahOrganisasi}" class="form-control border-0 bg-transparent px-0" placeholder="Organisasi / Pelatihan">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Jabatan</label>
                            <input type="text" name="jabatan_${jumalahOrganisasi}" id="jabatan_${jumalahOrganisasi}" class="form-control border-0 bg-transparent px-0" placeholder="Jabatan">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Bidang</label>
                            <input type="text" name="bidang_${jumalahOrganisasi}" id="bidang_${jumalahOrganisasi}" class="form-control border-0 bg-transparent px-0" placeholder="Bidang">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Periode</label>
                            <input type="text" name="periode_${jumalahOrganisasi}" id="periode_${jumalahOrganisasi}" class="form-control border-0 bg-transparent px-0" placeholder="Periode">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12" id="btn_remove_organisasi_${jumalahOrganisasi}">

                    </div>
                </div>
            </div>`;
            $(rows)
                .fadeIn("fast")
                .appendTo("#htmlstringorganisasi");
            return false;
        });

        // add bahasa
        $("#add-bahasa").click(function() {
            var rows = ``;
            jumlahBahasa++;
            function_btn_remove_bahasa(jumlahBahasa);
            rows += ` <div id="bahasa_${jumlahBahasa}">
                <h5 class="mb-3">Kemampuan Bahasa (Bahasa ${jumlahBahasa})</h5>
                <div class="row justify-content-xl-between mb-3">
                    <div class="col-lg-12">
                        <div class="form-group border-bottom">
                            <label for="">Bahasa</label>
                            <input type="text" name="name_bahasa_${jumlahBahasa}" id="name_bahasa_${jumlahBahasa}" class="form-control border-0 bg-transparent px-0" placeholder="Bahasa">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group">
                            <label for="" class="mb-2">Tertulis</label>
                            <div class="row">
                                <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tertulis_${jumlahBahasa}" id="bahasa-tulis-baik_${jumlahBahasa}"
                                    value="Baik">
                                    <label class="form-check-label" for="bahasa-tulis-baik_${jumlahBahasa}">
                                        Baik
                                    </label>
                                </div>
                                </div>
                                <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tertulis_${jumlahBahasa}" id="bahasa-tulis-cukup_${jumlahBahasa}"
                                    value="Cukup">
                                    <label class="form-check-label" for="bahasa-tulis-cukup_${jumlahBahasa}">
                                        Cukup
                                    </label>
                                </div>
                                </div>
                                <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tertulis_${jumlahBahasa}" id="bahasa-tulis-kurang_${jumlahBahasa}"
                                    value="Kurang">
                                    <label class="form-check-label" for="bahasa-tulis-kurang_${jumlahBahasa}">
                                        Kurang
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group">
                            <label for="" class="mb-2">Lisan</label>
                            <div class="row">
                                <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lisan_${jumlahBahasa}" id="bahasa-lisan-baik_${jumlahBahasa}"
                                    value="Baik">
                                    <label class="form-check-label" for="bahasa-lisan-baik_${jumlahBahasa}">
                                        Baik
                                    </label>
                                </div>
                                </div>
                                <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lisan_${jumlahBahasa}" id="bahasa-lisan-cukup_${jumlahBahasa}"
                                    value="Cukup">
                                    <label class="form-check-label" for="bahasa-lisan-cukup_${jumlahBahasa}">
                                        Cukup
                                    </label>
                                </div>
                                </div>
                                <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lisan_${jumlahBahasa}" id="bahasa-lisan-kurang_${jumlahBahasa}"
                                    value="Kurang">
                                    <label class="form-check-label" for="bahasa-lisan-kurang_${jumlahBahasa}">
                                        Kurang
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group border-bottom">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan_${jumlahBahasa}" id="keterangan_${jumlahBahasa}" class="form-control border-0 bg-transparent px-0" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12" id="btn_remove_bahasa_${jumlahBahasa}">

                    </div>
                </div>
            </div>`;
            $(rows)
                .fadeIn("fast")
                .appendTo("#htmlstringbahasa");
            return false;
        });

        // add keluarga
        $("#add-keluarga").click(function() {
            var rows = ``;
            jumlahKeluarga++;
            function_btn_remove_keluarga(jumlahKeluarga);
            rows += ` <div id="keluarga_${jumlahKeluarga}">
                <h5 class="mb-3">Keluarga Yang Bisa Dihubungi (Keluraga ${jumlahKeluarga})</h5>
                <div class="row justify-content-xl-between mb-3">
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Nama</label>
                            <input type="text" name="name_near_family_${jumlahKeluarga}" id="name_near_family_${jumlahKeluarga}" class="form-control border-0 bg-transparent px-0" placeholder="Nama">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Telepon</label>
                            <input type="text" name="telepon_near_family_${jumlahKeluarga}" id="telepon_near_family_${jumlahKeluarga}" class="form-control border-0 bg-transparent px-0" placeholder="Telepon">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="pekerjaan_near_family_${jumlahKeluarga}" id="pekerjaan_near_family_${jumlahKeluarga}" class="form-control border-0 bg-transparent px-0" placeholder="Pekerjaan">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="form-group border-bottom">
                            <label for="">Hubungan Keluarga</label>
                            <input type="text" name="hubungan_near_family_${jumlahKeluarga}" id="hubungan_near_family_${jumlahKeluarga}" class="form-control border-0 bg-transparent px-0" placeholder="Hubungan Keluarga">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12" id="btn_remove_keluarga_${jumlahKeluarga}">

                    </div>
                </div>
            </div>`;
            $(rows)
                .fadeIn("fast")
                .appendTo("#htmlstringkeluarga");
            return false;
        });
        // ==============================================

        // ==============================================
        $('#create_applied').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            console.log(formData);

            // variabel array kosong
            let saudara = [];
            let anak = [];
            let organisasi = [];
            let bahasa = [];
            let keluarga = [];

            // loop and push jumlah saudara with array
            for (let jumsaudara = 1; jumsaudara <= jumlahSaudara; jumsaudara++) {

                var nama_saudara = document.getElementById("nama_saudara_" + jumsaudara).value
                var jenis_kelamin_saudara = $("input[type=radio][name=jenis_kelamin_saudara_" + jumsaudara +
                    "]:checked").val();
                var pekerjaan_saudara = document.getElementById("pekerjaan_saudara_" + jumsaudara).value;
                var pendidikan_saudara = document.getElementById("pendidikan_saudara_" + jumsaudara).value;

                const saudara_ke = {
                    nama_saudara: nama_saudara,
                    jenis_kelamin_saudara: jenis_kelamin_saudara,
                    pekerjaan_saudara: pekerjaan_saudara,
                    pendidikan_saudara: pendidikan_saudara,
                }

                saudara.push(saudara_ke);
            }

            // loop and push jumlah anak with array
            for (let jumanak = 1; jumanak <= jumlahAnak; jumanak++) {

                var nama_anak = document.getElementById("nama_anak_" + jumanak).value
                var jenis_kelamin_anak = $("input[type=radio][name=jenis_kelamin_anak_" + jumanak + "]:checked")
                    .val();
                var pekerjaan_anak = document.getElementById("pekerjaan_anak_" + jumanak).value;
                var pendidikan_anak = document.getElementById("pendidikan_anak_" + jumanak).value;

                const anak_ke = {
                    nama_anak: nama_anak,
                    jenis_kelamin_anak: jenis_kelamin_anak,
                    pekerjaan_anak: pekerjaan_anak,
                    pendidikan_anak: pendidikan_anak,
                }

                anak.push(anak_ke);
            }

            // loop and push jumlah organisasi with array
            for (let jumorganisasi = 1; jumorganisasi <= jumalahOrganisasi; jumorganisasi++) {

                var name_organisasi = document.getElementById("name_organisasi_" + jumorganisasi).value;
                var jabatan = document.getElementById("jabatan_" + jumorganisasi).value;
                var bidang = document.getElementById("bidang_" + jumorganisasi).value;
                var periode = document.getElementById("periode_" + jumorganisasi).value;

                const organisasi_ke = {
                    name_organisasi: name_organisasi,
                    jabatan: jabatan,
                    bidang: bidang,
                    periode: periode,
                }

                organisasi.push(organisasi_ke);
            }

            // loop and push jumlah bahasa with array
            for (let jumbahasa = 1; jumbahasa <= jumlahBahasa; jumbahasa++) {

                var name_bahasa = document.getElementById("name_bahasa_" + jumbahasa).value;
                var tertulis = $("input[type=radio][name=tertulis_" + jumbahasa + "]:checked").val();
                var lisan = $("input[type=radio][name=lisan_" + jumbahasa + "]:checked").val();
                var keterangan = document.getElementById("keterangan_" + jumbahasa).value;

                const bahasa_ke = {
                    name_bahasa: name_bahasa,
                    tertulis: tertulis,
                    lisan: lisan,
                    keterangan: keterangan,
                }

                bahasa.push(bahasa_ke);
            }

            // loop and push jumlah keluarga with array
            for (let jumkeluarga = 1; jumkeluarga <= jumlahKeluarga; jumkeluarga++) {

                var name_near_family = document.getElementById("name_near_family_" + jumkeluarga).value;
                var telepon_near_family = document.getElementById("telepon_near_family_" + jumkeluarga).value;
                var pekerjaan_near_family = document.getElementById("pekerjaan_near_family_" + jumkeluarga).value;
                var hubungan_near_family = document.getElementById("hubungan_near_family_" + jumkeluarga).value;

                const keluarga_ke = {
                    name_near_family: name_near_family,
                    telepon_near_family: telepon_near_family,
                    pekerjaan_near_family: pekerjaan_near_family,
                    hubungan_near_family: hubungan_near_family,
                }

                keluarga.push(keluarga_ke);
            }

            // cek value data dengan console
            // console.log(saudara);
            // console.log(anak);
            // console.log(organisasi);
            // console.log(bahasa);
            // console.log(keluarga);
            // console.log(formData);

            // sand to controller with ajax
            var lang = $('#lang').val();
            Swal.fire({
                icon: 'warning',
                title: 'Konfirmasi',
                text: 'Yakin data yang anda masukan sudah benar ?',
                showCancelButton: !0,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('home.applied_store') }}",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: (data) => {
                            if (data.success) {
                                var id_identitas = data.success

                                // loop and sand ajax jumlah saudara
                                saudara.forEach(function(element) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "{{ route('home.jumlah_saudara_store') }}",
                                        data: {
                                            _methode: "POST",
                                            _token: "{{ csrf_token() }}",
                                            id_identitas: id_identitas,
                                            nama_saudara: element.nama_saudara,
                                            jenis_kelamin_saudara: element
                                                .jenis_kelamin_saudara,
                                            pekerjaan_saudara: element
                                                .pekerjaan_saudara,
                                            pendidikan_saudara: element
                                                .pendidikan_saudara,
                                        },
                                        succes: (data) => {
                                            var id_identitas = data.success
                                            // alert("sukses input saudara idnya "+id_identitas)
                                            console.log(
                                                "sukses input saudara idnya " +
                                                id_identitas);
                                        }
                                    });
                                });

                                // loop and sand ajax jumlah anak
                                anak.forEach(function(element) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "{{ route('home.jumlah_anak_store') }}",
                                        data: {
                                            _methode: "POST",
                                            _token: "{{ csrf_token() }}",
                                            id_identitas: id_identitas,
                                            nama_anak: element.nama_anak,
                                            jenis_kelamin_anak: element
                                                .jenis_kelamin_anak,
                                            pekerjaan_anak: element
                                                .pekerjaan_anak,
                                            pendidikan_anak: element
                                                .pendidikan_anak,
                                        },
                                        succes: (data) => {
                                            var id_identitas = data.success
                                            // alert("sukses input anak idnya "+id_identitas)
                                            console.log(
                                                "sukses input anak idnya " +
                                                id_identitas);
                                        }
                                    });
                                });

                                // loop and sand ajax jumlah organisasi
                                organisasi.forEach(function(element) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "{{ route('home.jumlah_organisasi_store') }}",
                                        data: {
                                            _methode: "POST",
                                            _token: "{{ csrf_token() }}",
                                            id_identitas: id_identitas,
                                            name_organisasi: element
                                                .name_organisasi,
                                            jabatan: element.jabatan,
                                            bidang: element.bidang,
                                            periode: element.periode,
                                        },
                                        succes: (data) => {
                                            var id_identitas = data.success
                                            // alert("sukses input anak idnya "+id_identitas)
                                            console.log(
                                                "sukses input anak idnya " +
                                                id_identitas);
                                        }
                                    });
                                });

                                // loop and sand ajax jumlah bahasa
                                bahasa.forEach(function(element) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "{{ route('home.jumlah_bahasa_store') }}",
                                        data: {
                                            _methode: "POST",
                                            _token: "{{ csrf_token() }}",
                                            id_identitas: id_identitas,
                                            nama_bahasa: element.name_bahasa,
                                            tertulis: element.tertulis,
                                            lisan: element.lisan,
                                            keterangan: element.keterangan,
                                        },
                                        succes: (data) => {
                                            var id_identitas = data.success
                                            // alert("sukses input anak idnya "+id_identitas)
                                            console.log(
                                                "sukses input anak idnya " +
                                                id_identitas);
                                        }
                                    });
                                });

                                // loop and sand ajax jumlah keluarga
                                keluarga.forEach(function(element) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "{{ route('home.jumlah_keluarga_store') }}",
                                        data: {
                                            _methode: "POST",
                                            _token: "{{ csrf_token() }}",
                                            id_identitas: id_identitas,
                                            name_near_family: element
                                                .name_near_family,
                                            telepon_near_family: element
                                                .telepon_near_family,
                                            pekerjaan_near_family: element
                                                .pekerjaan_near_family,
                                            hubungan_near_family: element
                                                .hubungan_near_family,
                                        },
                                        succes: (data) => {
                                            var id_identitas = data.success
                                            // alert("sukses input anak idnya "+id_identitas)
                                            console.log(
                                                "sukses input anak idnya " +
                                                id_identitas);
                                        }
                                    });
                                });

                                // console.log(id_identitas)
                                // alert("data berhasil dikirim ke pihak rekrutmen, silahkan menunggu hasil seleksi untuk ke tahap selanjutnya.")
                                // window.location.href = "{{ url('/karir?lang=') }}" + lang;

                                // Sweet Alert
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil Submit',
                                    text: 'Data berhasil dikirim ke pihak rekrutmen, silahkan menunggu hasil seleksi untuk ke tahap selanjutnya.',
                                    showConfirmButton: false,
                                    timer: 6000
                                }).then((result) => {
                                    window.location.href =
                                        "{{ url('/karir?lang=') }}" + lang;
                                });

                            } else if (data.dataganda) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Gagal Submit. ',
                                    text: `${data.dataganda}`,
                                    showConfirmButton: true,
                                    timer: 6000
                                });
                            } else if (data.error) {
                                printErrorMsgAdd(data.error);

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal Submit. ',
                                    text: 'Data Anda Belum Lengkap.',
                                    showConfirmButton: true,
                                    timer: 6000
                                });

                                // alert("identitas gagal ditambahkan")
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            });
        });

        function printErrorMsgAdd(msg) {
            $(".print-error-msg-add").find("ul").html('');
            $(".print-error-msg-add").css('display', 'block');

            $.each(msg, function(key, value) {
                $(".print-error-msg-add").find("ul").append('<li>' + value + '</li>');
            });
        }

        $('body').attr('id', 'karir');
        $('#nav-career,').addClass('active');
    </script> --}}



    @endsection

@section('pageScripts')
    <script>
        $('.nav-career').addClass('active');
    </script>
@endsection
