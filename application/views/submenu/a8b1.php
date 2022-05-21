<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        <?php $no=1; foreach($sd as $sfd) : ?>
        <p class="p-submenu mb-1 mt-2">
            <b class="mr-4">1.<?= $kode.$no++ ?></b> <?= $sfd->nama_sifat_dasar ?>
            <span class="float-right text-danger mr-2">
                <a href="#" data-toggle="modal" data-target="#edit<?= $sfd->id_sifat_dasar ?>"><i class="fas fa-edit text-dark"></i></a>
                <a href="<?= base_url('sifatdasar/delete/'.$sfd->id_sifat_dasar.'/'.($sfd->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                <div class="modal" id="edit<?= $sfd->id_sifat_dasar ?>" tabindex="-1" aria-labelledby="example<?= $sfd->id_sifat_dasar ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="example<?= $sfd->id_sifat_dasar ?>">Edit <?= $title_sub ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('sifatdasar/update') ?>" method="POST">
                                    <input type="text" class="d-none" name="id_sifat_dasar" value="<?= $sfd->id_sifat_dasar ?>">
                                    <div class="form-group">
                                        <label for="nama_sifat_dasar"><?= $title_sub ?></label>
                                        <input type="text" class="form-control" name="nama_sifat_dasar" id="nama_sifat_dasar" value="<?= $sfd->nama_sifat_dasar ?>" required>
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
                        <form action="<?= base_url('sifatdasar/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="nama_sifat_dasar"><?= $title_sub ?></label>
                                <input type="text" class="form-control" name="nama_sifat_dasar" id="nama_sifat_dasar" required>
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>