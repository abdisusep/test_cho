<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

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
                        <form id="insert_user" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Pribadi</h4>
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_panggilan">Nama Panggilan</label>
                                        <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control dataJK" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_ktp">Alamat Sesuai KTP</label>
                                        <textarea class="form-control" name="alamat_ktp" id="alamat_ktp" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi1">Provinsi</label>
                                        <input type="text" name="getProv1" id="getProv1" style="display:none;">
                                        <select name="provinsi1" id="dataProvinsi1" class="form-control dataProvinsi" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota1">Kota/Kabupaten</label>
                                        <select name="kota1" id="dataKab1" class="form-control dataKab" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_saat_ini">Alamat Saat Ini</label>
                                        <textarea class="form-control" name="alamat_saat_ini" id="alamat_saat_ini" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi2">Provinsi</label>
                                        <input type="text" name="getProv2" id="getProv2" style="display:none;">
                                        <select name="provinsi2" id="dataProvinsi2" class="form-control dataProvinsi" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota2">Kota/Kabupaten</label>
                                        <select name="kota2" id="dataKab2" class="form-control dataKab" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No.Handphone</label>
                                        <input type="number" class="form-control" name="no_hp" id="no_hp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK KTP</label>
                                        <input type="number" class="form-control" name="nik" id="nik" required>
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
                                        <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan</label>
                                        <input type="number" class="form-control" name="berat_badan" id="berat_badan" required>
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
                                        <input type="text" class="form-control" name="instagram" id="instagram" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" id="twitter" required>
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
                                        <input type="text" class="form-control" name="pernah_bekerja" id="pernah_bekerja" required>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Data Pendaftaran</h4>
                                    <div class="form-group">
                                        <label for="tgl_panggil">Tanggal Pemanggilan</label>
                                        <input type="date" class="form-control" name="tgl_panggil" id="tgl_panggil" required>
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
                                        <input type="number" class="form-control" name="no_keluarga" id="no_keluarga" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_ortu">Alamat Orang Tua Saat Ini</label>
                                        <textarea class="form-control" name="alamat_ortu" id="alamat_ortu" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi3">Provinsi</label>
                                        <input type="text" name="getProv3" id="getProv3" style="display:none;">
                                        <select name="provinsi3" id="dataProvinsi3" class="form-control dataProvinsi" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota3">Kota/Kabupaten</label>
                                        <select name="kota3" id="dataKab3" class="form-control dataKab" required>
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
                                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_ayah">Status Ayah</label>
                                        <select name="status_ayah" id="status_ayah" class="form-control statusOrtu" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Lengkap Ibu</label>
                                        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_ibu">Status Ibu</label>
                                        <select name="status_ibu" id="status_ibu" class="form-control statusOrtu" required>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan1">Pekerjaan Saudara 1</label>
                                        <input type="text" class="form-control" name="pekerjaan1" id="pekerjaan1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan2">Pekerjaan Saudara 2</label>
                                        <input type="text" class="form-control" name="pekerjaan2" id="pekerjaan2" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan3">Pekerjaan Saudara 3</label>
                                        <input type="text" class="form-control" name="pekerjaan3" id="pekerjaan3" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4 class="font-weight-bold">Upload Data</h4>
                                    <div class="form-group">
                                        <label for="foto_diri">Foto Diri</label>
                                        <input type="file" class="form-control" name="foto_diri" accept="image/*" id="foto_diri" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_ktp">Foto Kartu Tanda Penduduk</label>
                                        <input type="file" class="form-control" name="foto_ktp" accept="image/*" id="foto_ktp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_kk">Foto Kartu Keluarga</label>
                                        <input type="file" class="form-control" name="foto_kk" accept="image/*" id="foto_kk" required>
                                    </div>
                                    
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
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


            $("#insert_user").validate();
            $("#insert_user").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this)
                $.ajax({
                    url: "<?= base_url('form/insert') ?>",
                    data: formData,
                    type: "POST",
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(res){
                        // console.log(res)
                        if (res.success) {
                            $('#insert_user')[0].reset();
                            sweetALert('success', res.message)
                            setTimeout(() => {
                                $(location).attr('href', "<?= base_url('data') ?>");
                            }, 2300);
                        }else{
                            sweetALert('error', res.message)
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_jenis_kelamin+'">'+data[i].nama_jenis_kelamin+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_agama+'">'+data[i].nama_agama+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_status_sekarang+'">'+data[i].nama_status_sekarang+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_golongan_darah+'">'+data[i].nama_golongan_darah+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_ukuran_baju+'">'+data[i].nama_ukuran_baju+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_riwayat_penyakit+'">'+data[i].nama_riwayat_penyakit+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_pendidikan+'">'+data[i].nama_pendidikan+'</option>';
                            $('.pendTerakhir').html(row);
                        }
                    }
                });
            }

            LoadTujuanBekerja();
            function LoadTujuanBekerja() {
                $.ajax({
                    url: "<?= base_url('api/tujuanbekerja') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(data) {
                        // console.log(data)
                        let row = '<option value="">--Pilih--</option>';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_tujuan_bekerja+'">'+data[i].nama_tujuan_bekerja+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_daftar_bagian+'">'+data[i].nama_daftar_bagian+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_aktivitas_lain+'">'+data[i].nama_aktivitas_lain+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_status_keluarga+'">'+data[i].nama_status_keluarga+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_penghasilan_ortu+'">'+data[i].nama_penghasilan_ortu+'</option>';
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
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_jumlah_tanggungan+'">'+data[i].nama_jumlah_tanggungan+'</option>';
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
                        let row = '<option value="">--Pilih--</option>';
                        for (let i=0; i<data.length; i++) {
                            // console.log(data[i].nama)
                            row += '<option value="'+data[i].nama_status_ortu+'">'+data[i].nama_status_ortu+'</option>';
                            $('.statusOrtu').html(row);
                        }
                    }
                });
            }

            LoadProvinsi();
            function LoadProvinsi() {
                $.get('https://dev.farizdotid.com/api/daerahindonesia/provinsi', function(res) {
                    let data = res.provinsi
                    let row = '<option value="">--Pilih--</option>';
                    for (let i=0; i<data.length; i++) {
                        row += '<option value="'+data[i].id+'">'+data[i].nama+'</option>';
                        $('.dataProvinsi').html(row);
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
                    // console.log(data)
                    $('#getProv2').val(data.nama)
                });
                LoadKab(id_provinsi, 2);
            });

            $('#dataProvinsi3').on('change', function() {
                let id_provinsi = this.value;
                $.get(`https://dev.farizdotid.com/api/daerahindonesia/provinsi/${id_provinsi}`, function(data) {
                    // console.log(data)
                    $('#getProv3').val(data.nama)
                });
                LoadKab(id_provinsi, 3);
            });

            function LoadKab(id, num) {
                $.get(`https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${id}`, function(res) {
                    let data = res.kota_kabupaten
                    let row = '<option value="">--Pilih--</option>';
                    for (let i=0; i<data.length; i++) {
                        // console.log(data[i].nama)
                        row += '<option value="'+data[i].nama+'">'+data[i].nama+'</option>';
                        $('#dataKab'+num).html(row);
                    }
                });
            }
        });
    </script>
</body>
</html>