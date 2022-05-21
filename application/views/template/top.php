<?php 

function titik($str)
{
    $string = '';
	for ($i=0; $i < strlen($str); $i++) { 
		$titik = '.';
		$string .= $str[$i].$titik; 
	}

    return strtoupper(substr($string, 0, 6));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/toastr.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-radius: 0.8rem;">
            <a class="navbar-brand" href="#">CHO.1</a>
            <button class="navbar-toggler border-0 bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/') ?>">Master</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/data') ?>">Data</a>
                </li>
                </ul>
            </div>
        </nav>

        <div class="row mb-3 mt-4">
            <?php $no=1; foreach($menu as $mn) : ?>
            <div class="col-lg-3 col-md-3 col-4">
                <a href="<?= base_url('page/'.$mn->kode) ?>" class="btn btn-menu <?= $this->uri->segment(2) == $mn->kode ? 'active' : '' ?>">A.<?= $no++.' '.$mn->nama_menu ?></a>
            </div> 
            <?php endforeach; ?>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="title text-center font-weight-bold">1.A.<?= substr($this->uri->segment(2), 1, 2).'. '.$title ?></h5>
                        <?php $nom=1; foreach($submenu as $sm) : ?>
                            <a href="<?= current_url().'?sub='.$sm->id_menu.'b'.$nom ?>" class="btn btn-submenu <?= $sub == $sm->kode ? 'active' : false ?>"><b class="mr-2">1.<?= titik($sm->kode).$nom ?></b> <?= $sm->nama_sub_menu ?></a>
                        <?php $nom++ ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php if($this->input->get('sub')) : ?>
                <?php if(isset($versi)) : ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="title text-center font-weight-bold">Riwayat Versi</h5>
                            <?php $nmr=1; foreach($versi as $v) : ?>
                                <p class="p-submenu"><b class="mr-3">Versi <?= $nmr++?></b> <?= $v->tanggal ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>


            <div class="col-8">
