<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>

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
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white border-0">
                        <a href="<?= base_url('form') ?>" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</td>
                                        <th>Jenis Kelamin</td>
                                        <th>Tempat, tanggal lahir</td>
                                        <th>Alamat</td>
                                        <th>Status</td>
                                        <th>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody id="dataUser">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        $(document).ready(function () {
            LoadUser();
            function LoadUser() {
                $.ajax({
                    url: "<?= base_url('api/user') ?>",
                    type: 'get',
                    dataType:'json',
                    success: function(res) {
                        // console.log(res)
                        let row = '';
                        let no = 1;
                        for (let i=0; i<res.length; i++) {
                            let status = res[i].status == 1 ? '<span class="badge badge-warning">Belum Kontrak</span>' : '<span class="badge badge-success">Sudah Kontrak</span>'
                            // console.log(status)
                            row += '<tr>'+
                            '<td>'+(no++)+'</td>'+
                            '<td>'+res[i].nama_lengkap+' ('+res[i].nama_panggilan+')</td>'+
                            '<td>'+res[i].jk+'</td>'+
                            '<td>'+res[i].tmp_lahir+', '+res[i].tgl_lahir+'</td>'+
                            '<td><p>'+res[i].alamat_ktp+' - '+res[i].kota1+' - '+res[i].provinsi1+'</p></td>'+
                            '<td>'+status+'</td>'+
                            '<td style="width:8%;">'+
                                '<a href="<?= base_url('user/edit/') ?>'+res[i].id_user+'" class="mr-3"><i class="fas fa-edit text-primary"></i></a>'+
                                '<a href="<?= base_url('kontrak/user/') ?>'+res[i].id_user+'"><i class="fas fa-eye text-dark"></i></a>'+
                            '</td>'+
                            '</tr>'
                            $('#dataUser').html(row);
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>