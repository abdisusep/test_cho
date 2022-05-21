<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mb-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-radius: 0.8rem;">
            <a class="navbar-brand" href="#">CHO.1</a>
            <button class="navbar-toggler border-0 bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Master</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/data') ?>">Data</a>
                </li>
                </ul>
            </div>
        </nav>

        <div class="row mt-3">
            <div class="col-lg-6 col-12 m-auto">
                <div class="card">
                    <div class="card-header bg-white border-0">
                        <a href="<?= base_url('data') ?>" class="btn btn-dark btn-sm"><i class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <h3 class="font-weight-bold mb-3">Edit User</h3>
                        <form id="update_user" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Pribadi</h4>
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" value="<?= $user->nama_lengkap ?>" id="nama_lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_panggilan">Nama Panggilan</label>
                                        <input type="text" class="form-control" name="nama_panggilan" value="<?= $user->nama_panggilan ?>" id="nama_panggilan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control dataJK" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $user->tmp_lahir ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $user->tgl_lahir ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_ktp">Alamat Sesuai KTP</label>
                                        <textarea class="form-control" name="alamat_ktp" id="alamat_ktp" required><?= $user->alamat_ktp ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi1">Provinsi (<?= $user->provinsi1 ?>)</label>
                                        <input type="text" name="getProv1" id="getProv1" style="display:none;">
                                        <select name="provinsi1" id="dataProvinsi1" class="form-control dataProvinsi1">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota1">Kota/Kabupaten (<?= $user->kota1 ?>)</label>
                                        <select name="kota1" id="dataKab1" class="form-control dataKab">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_saat_ini">Alamat Saat Ini</label>
                                        <textarea class="form-control" name="alamat_saat_ini" id="alamat_saat_ini" required><?= $user->nama_lengkap ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi2">Provinsi (<?= $user->provinsi2 ?>)</label>
                                        <input type="text" name="getProv2" id="getProv2" style="display:none;">
                                        <select name="provinsi2" id="dataProvinsi2" class="form-control dataProvinsi">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota2">Kota/Kabupaten (<?= $user->kota2 ?>)</label>
                                        <select name="kota2" id="dataKab2" class="form-control dataKab">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No.Handphone</label>
                                        <input type="number" class="form-control" name="no_hp" id="no_hp" value="<?= $user->no_hp ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK KTP</label>
                                        <input type="number" class="form-control" name="nik" id="nik" value="<?= $user->nik ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi">Agama</label>
                                        <select name="agama" id="agama" class="form-control dataAgama" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_sekarang">Status Sekarang</label>
                                        <select name="status_sekarang" id="status_sekarang" class="form-control stsSekarang" required>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Fisik</h4>
                                    <div class="form-group">
                                        <label for="goldar">Golongan Darah</label>
                                        <select name="goldar" id="goldar" class="form-control golDar" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tinggi_badan">Tinggi Badan</label>
                                        <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" value="<?= $user->tinggi_badan ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan</label>
                                        <input type="number" class="form-control" name="berat_badan" id="berat_badan" value="<?= $user->berat_badan ?>" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="ukuran_baju">Ukuran Baju</label>
                                        <select name="ukuran_baju" id="ukuran_baju" class="form-control ukBaju" required>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="riwayat_penyakit">Riwayat Penyakit</label>
                                        <select name="riwayat_penyakit" id="riwayat_penyakit" class="form-control rPenyakit" required>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Media Sosial</h4>
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="instagram" value="<?= $user->instagram ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="<?= $user->facebook ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" id="twitter" value="<?= $user->twitter ?>" required>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Pengalaman Sebelumnya</h4>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan Terakhir</label>
                                        <select class="form-control pendTerakhir" name="pendidikan" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tujuan_bekerja">Tujuan Bekerja</label>
                                        <select name="tujuan_bekerja" id="tujuan_bekerja" class="form-control tujuanBekerja" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pernah_bekerja">Pernah Bekerja di</label>
                                        <input type="text" class="form-control" name="pernah_bekerja" id="pernah_bekerja" value="<?= $user->pernah_bekerja ?>" required>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Pendaftaran</h4>
                                    <div class="form-group">
                                        <label for="tgl_panggil">Tanggal Pemanggilan</label>
                                        <input type="date" class="form-control" name="tgl_panggil" id="tgl_panggil" value="<?= $user->tgl_panggil ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="daftar_bagian">Daftar di Bagian</label>
                                        <select name="daftar_bagian" id="daftar_bagian" class="form-control daftarBagian" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="aktivitas_lain">Aktivitas di luar lain</label>
                                        <select name="aktivitas_lain" id="aktivitas_lain" class="form-control aktivitasLain" required>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Keluarga</h4>
                                    <div class="form-group">
                                        <label for="no_keluarga">Nomor Kerabat / Keluarga</label>
                                        <input type="number" class="form-control" name="no_keluarga" id="no_keluarga" value="<?= $user->no_keluarga ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_ortu">Alamat Orang Tua Saat Ini</label>
                                        <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" required><?= $user->nama_lengkap ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi3">Provinsi (<?= $user->provinsi3 ?>)</label>
                                        <input type="text" name="getProv3" id="getProv3" style="display:none;">
                                        <select name="provinsi3" id="dataProvinsi3" class="form-control dataProvinsi">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota3">Kota/Kabupaten (<?= $user->kota3 ?>)</label>
                                        <select name="kota3" id="dataKab3" class="form-control dataKab">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_ortu">Status Orang Tua</label>
                                        <select name="status_ortu" id="status_ortu" class="form-control statusKel" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penghasilan_ortu">Penghasilan Orang Tua</label>
                                        <select name="penghasilan_ortu" id="penghasilan_ortu" class="form-control penghasilanOrtu" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jum_tanggungan">Jumlah Tanggungan Orang Tua</label>
                                        <select name="jum_tanggungan" id="jum_tanggungan" class="form-control jumlahTanggungan" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Lengkap Ayah</label>
                                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?= $user->nama_ayah ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_ayah">Status Ayah (<?= $user->status_ayah ?>)</label>
                                        <select name="status_ayah" id="status_ayah" class="form-control statusAyah" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?= $user->pekerjaan_ayah ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Lengkap Ibu</label>
                                        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?= $user->nama_ibu ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_ibu">Status Ibu (<?= $user->status_ibu ?>)</label>
                                        <select name="status_ibu" id="status_ibu" class="form-control statusIbu" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?= $user->pekerjaan_ibu ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan1">Pekerjaan Saudara 1</label>
                                        <input type="text" class="form-control" name="pekerjaan1" id="pekerjaan1" value="<?= $user->pekerjaan1 ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan2">Pekerjaan Saudara 2</label>
                                        <input type="text" class="form-control" name="pekerjaan2" id="pekerjaan2" value="<?= $user->pekerjaan2 ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan3">Pekerjaan Saudara 3</label>
                                        <input type="text" class="form-control" name="pekerjaan3" id="pekerjaan3" value="<?= $user->pekerjaan3 ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Upload Data</h4>
                                    <div class="form-group">
                                        <label for="foto_diri">Foto Diri </label>
                                        <button type="button" class="btn btn-light btn-sm shadow-sm" data-toggle="modal" data-target="#fotoDiri">
                                            <i class="fas fa-eye text-dark"></i>
                                        </button>
                                        <input type="file" class="form-control" name="foto_diri" accept="image/*" id="foto_diri">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_ktp">Foto Kartu Tanda Penduduk</label>
                                        <button type="button" class="btn btn-light btn-sm shadow-sm" data-toggle="modal" data-target="#fotoKTP">
                                            <i class="fas fa-eye text-dark"></i>
                                        </button>
                                        <input type="file" class="form-control" name="foto_ktp" id="foto_ktp">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_kk">Foto Kartu Keluarga</label>
                                        <button type="button" class="btn btn-light btn-sm shadow-sm" data-toggle="modal" data-target="#fotoKK">
                                            <i class="fas fa-eye text-dark"></i>
                                        </button>
                                        <input type="file" class="form-control" name="foto_kk" id="foto_kk">
                                    </div>
                                    
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                            <div class="modal fade" id="fotoDiri" tabindex="-1" aria-labelledby="fotoDiri" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="fotoDiri">Foto Diri</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center pt-0">
                                        <img src="<?= base_url('assets/img/'.$user->foto_diri) ?>"class="rounded w-50" alt="foto">
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="fotoKTP" tabindex="-1" aria-labelledby="fotoDiri" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="fotoDiri">Foto KTP</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center pt-0">
                                        <img src="<?= base_url('assets/img/'.$user->foto_ktp) ?>" class="rounded w-100" alt="foto">
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="fotoKK" tabindex="-1" aria-labelledby="fotoDiri" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="fotoDiri">Foto Kartu Keluarga</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center pt-0">
                                        <img src="<?= base_url('assets/img/'.$user->foto_kk) ?>" class="rounded w-100" alt="foto">
                                    </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {

            jQuery.extend(jQuery.validator.messages, {
                required: "Diisi dulu!",
            });


            $("#update_user").validate();
            $("#update_user").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this)

                $.ajax({
                    url: "<?= base_url('form/update/'.$this->uri->segment(3)) ?>",
                    data: formData,
                    type: "POST",
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(res){
                        console.log(res)
                        if (res.success) {
                            sweetALert('success', res.message)
                            setTimeout(() => {
                                $(location).attr('href', "<?= current_url() ?>");
                            }, 2300);
                        }
                    }
                });
            });

            function sweetALert(type, msg){
                Swal.fire({
                    icon: type,
                    html: msg,
                    showConfirmButton: false,
                    timer: 2200
                })
            }

            LoadJK();
            function LoadJK() {
                $.ajax({
                    url: "<?= base_url('api/jeniskelamin') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = ''
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_jenis_kelamin == "<?= $user->jk ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_jenis_kelamin+'" '+pilih+'>'+data[i].nama_jenis_kelamin+'</option>';
                            $('.dataJK').html(row);
                        }
                    }
                });
            }

            LoadAgama();
            function LoadAgama() {
                $.ajax({
                    url: "<?= base_url('api/agama') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = ''
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_agama == "<?= $user->agama ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_agama+'" '+pilih+'>'+data[i].nama_agama+'</option>';
                            $('.dataAgama').html(row);
                        }
                    }
                });
            }
            
            LoadStsSkrg();
            function LoadStsSkrg() {
                $.ajax({
                    url: "<?= base_url('api/statussekarang') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_status_sekarang == "<?= $user->status_sekarang ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_status_sekarang+'" '+pilih+'>'+data[i].nama_status_sekarang+'</option>';
                            $('.stsSekarang').html(row);
                        }
                    }
                });
            }

            LoadGoldar();
            function LoadGoldar() {
                $.ajax({
                    url: "<?= base_url('api/goldar') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_golongan_darah == "<?= $user->goldar ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_golongan_darah+'" '+pilih+'>'+data[i].nama_golongan_darah+'</option>';
                            $('.golDar').html(row);
                        }
                    }
                });
            }

            LoadUkBaju();
            function LoadUkBaju() {
                $.ajax({
                    url: "<?= base_url('api/ukuranbaju') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_ukuran_baju == "<?= $user->ukuran_baju ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_ukuran_baju+'" '+pilih+'>'+data[i].nama_ukuran_baju+'</option>';
                            $('.ukBaju').html(row);
                        }
                    }
                });
            }

            LoadPenyakit();
            function LoadPenyakit() {
                $.ajax({
                    url: "<?= base_url('api/penyakit') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_riwayat_penyakit == "<?= $user->riwayat_penyakit ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_riwayat_penyakit+'" '+pilih+'>'+data[i].nama_riwayat_penyakit+'</option>';
                            $('.rPenyakit').html(row);
                        }
                    }
                });
            }

            LoadPendidikan();
            function LoadPendidikan() {
                $.ajax({
                    url: "<?= base_url('api/pendidikan') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_pendidikan == "<?= $user->pendidikan ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_pendidikan+'" '+pilih+'>'+data[i].nama_pendidikan+'</option>';
                            $('.pendTerakhir').html(row);
                        }
                    }
                });
            }

            TujuanBekerja();
            function TujuanBekerja() {
                $.ajax({
                    url: "<?= base_url('api/tujuanbekerja') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_tujuan_bekerja == "<?= $user->tujuan_bekerja ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_tujuan_bekerja+'" '+pilih+'>'+data[i].nama_tujuan_bekerja+'</option>';
                            $('.tujuanBekerja').html(row);
                        }
                    }
                });
            }

            LoadBagian();
            function LoadBagian() {
                $.ajax({
                    url: "<?= base_url('api/daftarbagian') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_daftar_bagian == "<?= $user->daftar_bagian ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_daftar_bagian+'" '+pilih+'>'+data[i].nama_daftar_bagian+'</option>';
                            $('.daftarBagian').html(row);
                        }
                    }
                });
            }

            LoadAktivitas();
            function LoadAktivitas() {
                $.ajax({
                    url: "<?= base_url('api/aktivitaslain') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_aktivitas_lain == "<?= $user->aktivitas_lain ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_aktivitas_lain+'" '+pilih+'>'+data[i].nama_aktivitas_lain+'</option>';
                            $('.aktivitasLain').html(row);
                        }
                    }
                });
            }

            LoadStsKel();
            function LoadStsKel() {
                $.ajax({
                    url: "<?= base_url('api/statuskeluarga') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_status_keluarga == "<?= $user->status_ortu ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_status_keluarga+'" '+pilih+'>'+data[i].nama_status_keluarga+'</option>';
                            $('.statusKel').html(row);
                        }
                    }
                });
            }

            LoadPenghasilan();
            function LoadPenghasilan() {
                $.ajax({
                    url: "<?= base_url('api/penghasilanortu') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_penghasilan_ortu == "<?= $user->penghasilan_ortu ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_penghasilan_ortu+'" '+pilih+'>'+data[i].nama_penghasilan_ortu+'</option>';
                            $('.penghasilanOrtu').html(row);
                        }
                    }
                });
            }

            LoadJumTanggungan();
            function LoadJumTanggungan() {
                $.ajax({
                    url: "<?= base_url('api/tanggungan') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama_jumlah_tanggungan == "<?= $user->jum_tanggungan ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama_jumlah_tanggungan+'" '+pilih+'>'+data[i].nama_jumlah_tanggungan+'</option>';
                            $('.jumlahTanggungan').html(row);
                        }
                    }
                });
            }

            LoadStsOrtu();
            function LoadStsOrtu() {
                $.ajax({
                    url: "<?= base_url('api/statusortu') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row1 = '<option value="">--Pilih--</option>';
                        let row2 = '<option value="">--Pilih--</option>';
                        let pilih1 = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih1 = data[i].nama_status_ortu == "<?= $user->status_ayah ?>" ? 'selected' : '';
                            pilih2 = data[i].nama_status_ortu == "<?= $user->status_ibu ?>" ? 'selected' : '';
                            row1 += '<option value="'+data[i].nama_status_ortu+'" '+pilih1+'>'+data[i].nama_status_ortu+'</option>';
                            row2 += '<option value="'+data[i].nama_status_ortu+'" '+pilih2+'>'+data[i].nama_status_ortu+'</option>';
                            $('.statusAyah').html(row1);
                            $('.statusIbu').html(row2);
                        }
                    }
                });
            }

            LoadProvinsi();
            function LoadProvinsi() {
                $.get('https://dev.farizdotid.com/api/daerahindonesia/provinsi', function(res) {
                    let data = res.provinsi
                    let row = '<option value="">--Pilih--</option>';
                    let row1 = '<option value="">--Pilih--</option>';
                    let pilih1 = '';
                    for (let i=0; i<data.length; i++) {
                        if (data[i].nama == "<?= $user->provinsi1 ?>") {
                            pilih1 = 'selected';
                            LoadKab(data[i].id, 1);
                        }else{
                            pilih1='';
                        }
                        row += '<option value="'+data[i].id+'">'+data[i].nama+'</option>';
                        row1 += '<option value="'+data[i].id+'" '+pilih1+'>'+data[i].nama+'</option>';
                        $('.dataProvinsi').html(row);
                        $('.dataProvinsi1').html(row1);
                    }
                });
            }

            $('#dataProvinsi1').on('change', function() {
                let id_provinsi = this.value;
                $.get(`https://dev.farizdotid.com/api/daerahindonesia/provinsi/${id_provinsi}`, function(data) {
                    // console.log(data)
                    $('#getProv1').val(data.nama)
                });
                LoadKab(id_provinsi, 1);
            });

            $('#dataProvinsi2').on('change', function() {
                let id_provinsi = this.value;
                $.get(`https://dev.farizdotid.com/api/daerahindonesia/provinsi/${id_provinsi}`, function(data) {
                    console.log(data)
                    $('#getProv2').val(data.nama)
                });
                LoadKab(id_provinsi, 2);
            });

            $('#dataProvinsi3').on('change', function() {
                let id_provinsi = this.value;
                $.get(`https://dev.farizdotid.com/api/daerahindonesia/provinsi/${id_provinsi}`, function(data) {
                    console.log(data)
                    $('#getProv3').val(data.nama)
                });
                LoadKab(id_provinsi, 3);
            });

            function LoadKab(id, num) {
                $.get(`https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${id}`, function(res) {
                    let data = res.kota_kabupaten
                    let row = '<option value="">--Pilih--</option>';
                    if (num == 1) {
                        let pilih = '';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            pilih = data[i].nama == "<?= $user->kota1 ?>" ? 'selected' : '';
                            row += '<option value="'+data[i].nama+'" '+pilih+'>'+data[i].nama+'</option>';
                            $('#dataKab1').html(row);
                        }
                    }elseif(num == 2){

                    }elseif(num == 3){

                    }
                });
            }
        });
    </script>
</body>
</html>