<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        <?php $no=1; foreach($al as $akl) : ?>
        <p class="p-submenu mb-1 mt-2">
            <b class="mr-4">1.<?= $kode.$no++ ?></b> <?= $akl->nama_aktivitas_lain ?>
            <span class="float-right text-danger mr-2">
                <a href="#" data-toggle="modal" data-target="#edit<?=  $akl->id_aktivitas_lain ?>"><i class="fas fa-edit text-dark"></i></a>
                <a href="<?= base_url('aktlain/delete/'.$akl->id_aktivitas_lain.'/'.($akl->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                <div class="modal" id="edit<?= $akl->id_aktivitas_lain ?>" tabindex="-1" aria-labelledby="example<?= $akl->id_aktivitas_lain ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="example<?= $akl->id_aktivitas_lain ?>">Edit <?= $title_sub ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('aktlain/update') ?>" method="POST">
                                    <input type="text" class="d-none" name="id_aktivitas_lain" value="<?= $akl->id_aktivitas_lain ?>">
                                    <div class="form-group">
                                        <label for="nama_aktivitas_lain"><?= $title_sub ?></label>
                                        <input type="text" class="form-control" name="nama_aktivitas_lain" id="nama_aktivitas_lain" value="<?= $akl->nama_aktivitas_lain ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </p>
        <?php endforeach; ?>
        <a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#<?= $sub ?>">Tambah</a>
        <div class="modal" id="<?= $sub ?>" tabindex="-1" aria-labelledby="example<?= $sub ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example<?= $sub ?>">Tambah <?= $title_sub ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('aktlain/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="nama_aktivitas_lain"><?= $title_sub ?></label>
                                <input type="text" class="form-control" name="nama_aktivitas_lain" id="nama_aktivitas_lain">
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>