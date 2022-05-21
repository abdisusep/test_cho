<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        <?php $no=1; foreach($sot as $sortu) : ?>
        <p class="p-submenu mb-1 mt-2">
            <b class="mr-4">1.<?= $kode.$no++ ?></b> <?= $sortu->nama_status_ortu ?>
            <span class="float-right text-danger mr-2">
                <a href="#" data-toggle="modal" data-target="#edit<?= $sortu->id_status_ortu ?>"><i class="fas fa-edit text-dark"></i></a>
                <a href="<?= base_url('sortu/delete/'.$sortu->id_status_ortu.'/'.($sortu->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                <div class="modal" id="edit<?= $sortu->id_status_ortu ?>" tabindex="-1" aria-labelledby="example<?= $sortu->id_status_ortu ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="example<?= $sortu->id_status_ortu ?>">Edit <?= $title_sub ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('sortu/update') ?>" method="POST">
                                    <input type="text" class="d-none" name="id_status_ortu" value="<?= $sortu->id_status_ortu ?>">
                                    <div class="form-group">
                                        <label for="nama_status_ortu"><?= $title_sub ?></label>
                                        <input type="text" class="form-control" name="nama_status_ortu" id="nama_status_ortu" value="<?= $sortu->nama_status_ortu ?>" required>
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
                        <form action="<?= base_url('sortu/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="nama_status_ortu"><?= $title_sub ?></label>
                                <input type="text" class="form-control" name="nama_status_ortu" id="nama_status_ortu">
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>