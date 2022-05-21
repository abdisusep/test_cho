<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrak</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.signature.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mb-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-radius: 0.8rem;">
            <a class="navbar-brand" href="#">CHO.1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <div class="col-lg-12 m-auto">
                <div class="card">
                    <div class="card-header bg-white border-0">
                        <a href="<?= base_url('data') ?>" class="btn btn-dark btn-sm"><i class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <form id="submitKontrak" method="POST">
                            <input type="text" name="id_user" value="<?= $this->uri->segment(3) ?>" style='display:none;'>

                            <div class="row mb-5 mt-5">
                                <div class="col-sm-12">
                                    <h3 class="text-center font-weight-bold">Kontrak Kerja</h3>
                                    <p class="text-center m-0">Tanggal : <?= date('d').' '.date('M').' '.date('Y') ?></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-10 m-auto">
                                    <p>Yang bertanda tangan di bawah ini :</p>
                                    <table cellpadding="10" class="font-weight-bold">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?= $user->nama_lengkap ?></td>
                                        </tr>
                                        <tr>
                                            <td>Daftar Bagian</td>
                                            <td>:</td>
                                            <td><?= $user->daftar_bagian ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td><?= $user->alamat_ktp.', '.$user->kota1.' - '.$user->provinsi1 ?></td>
                                        </tr>
                                    </table>
                                    <img src="<?= base_url('assets/img/'.$user->foto_diri) ?>" width="150" alt="foto" class="ml-2 rounded">
                                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio sint rem quaerat praesentium, sequi quam? Modi dignissimos mollitia ut! Exercitationem quia velit dolorum autem quibusdam, minus nobis temporibus impedit!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio sint rem quaerat praesentium, sequi quam? Modi dignissimos mollitia ut! Exercitationem quia velit dolorum autem quibusdam, minus nobis temporibus impedit!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio sint rem quaerat praesentium, sequi quam? Modi dignissimos mollitia ut! Exercitationem quia velit dolorum autem quibusdam, minus nobis temporibus impedit!</p>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-sm-10 m-auto">
                                    <table cellpadding="10" class="font-weight-bold">
                                    <?php if($user->status == 1): ?>
                                        <tr>
                                            <td>Lama Kontrak</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="lama_kontrak" id="lama_kontrak">
                                                    <option value="1">1 bulan</option>
                                                    <option value="3">3 bulan</option>
                                                    <option value="6">6 bulan</option>
                                                    <option value="9">9 bulan</option>
                                                    <option value="12">12 bulan</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php else: ?>
                                        <!-- <tr>
                                            <td>Lama Kontrak</td>
                                            <td>:</td>
                                            <td>
                                                a
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td>Mulai Kontrak</td>
                                            <td>:</td>
                                            <td>
                                            <?= $kontrak->mulai_kontrak ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Habis Kontrak</td>
                                            <td>:</td>
                                            <td>
                                            <?= $kontrak->habis_kontrak ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 m-auto text-center">
                                    <p>Tanda tangan</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <label>Pihak Pertama:</label>
                                    <br/>
                                    <?php if($user->status == 2): ?>
                                        <img src="<?= base_url('assets/img/'.$kontrak->ttd1) ?>" class="ttd" alt="ttd1">
                                    <?php else: ?>
                                        <button id="clear1" class="btn btn-info btn-sm" style="position:absolute; opacity:0.3;"><i class="fas fa-undo"></i></button>
                                        <div class="sig" id="sig1"></div>
                                        <br/>
                                        <textarea id="signature1" name="signed1" style="display: none"></textarea>
                                    <?php endif; ?>
                                    <p class="font-weight-bold">(<?= $user->nama_lengkap ?>)</p>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <label>Pihak Kedua:</label>
                                    <br/>
                                    <?php if($user->status == 2): ?>
                                        <img src="<?= base_url('assets/img/'.$kontrak->ttd2) ?>" class="ttd" alt="ttd2">
                                    <?php else: ?>
                                        <button id="clear2" class="btn btn-info btn-sm" style="position:absolute; opacity:0.3;"><i class="fas fa-undo"></i></button>
                                        <div class="sig" id="sig2"></div>
                                        <br/>
                                        <textarea id="signature2" name="signed2" style="display: none"></textarea>
                                    <?php endif; ?>
                                    <p class="font-weight-bold">(Pihak Kedua)</p>
                                </div>
                            </div>

                            <?php if($user->status == 1): ?>
                            <div class="row">
                                <div class="col-sm-10 m-auto">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/js/jquery.signature.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js') ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        let sig1 = $('#sig1').signature({syncField: '#signature1', syncFormat: 'PNG'});
        let sig2 = $('#sig2').signature({syncField: '#signature2', syncFormat: 'PNG'});

        $('#clear1').click(function(e) {
            e.preventDefault();
            sig1.signature('clear');
            $("#signature1").val('');
        });
        $('#clear2').click(function(e) {
            e.preventDefault();
            sig2.signature('clear');
            $("#signature2").val('');
        });

        $("#submitKontrak").submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this)
            $.ajax({
                url: "<?= base_url('kontrak/insert') ?>",
                data: formData,
                type: "POST",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                success: function(res){
                    console.log(res)
                    if (res.success) {
                        sweetALert('success', res.message);
                        setTimeout(() => {
                            $(location).attr('href', "<?= current_url() ?>");
                        }, 2300);
                    }else{
                        sweetALert('error', res.message);
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

    </script>

</body>
</html>