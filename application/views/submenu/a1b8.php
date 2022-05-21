<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        <?php $no=1; foreach($db as $dbg) : ?>
        <p class="p-submenu mb-1 mt-2">
            <b class="mr-4">1.<?= $kode.$no++ ?></b> <?= $dbg->nama_daftar_bagian ?>
            <span class="float-right text-danger mr-2">
                <a href="#" data-toggle="modal" data-target="#edit<?= $dbg->id_daftar_bagian ?>"><i class="fas fa-edit text-dark"></i></a>
                <a href="<?= base_url('dafbagian/delete/'.$dbg->id_daftar_bagian.'/'.($dbg->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                <div class="modal" id="edit<?= $dbg->id_daftar_bagian ?>" tabindex="-1" aria-labelledby="example<?= $dbg->id_daftar_bagian ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="example<?= $dbg->id_daftar_bagian ?>">Edit <?= $title_sub ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('dafbagian/update') ?>" method="POST">
                                    <input type="text" class="d-none" name="id_daftar_bagian" value="<?= $dbg->id_daftar_bagian ?>">
                                    <div class="form-group">
                                        <label for="nama_daftar_bagian"><?= $title_sub ?></label>
                                        <input type="text" class="form-control" name="nama_daftar_bagian" id="nama_daftar_bagian" value="<?= $dbg->nama_daftar_bagian ?>" required>
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
                        <form action="<?= base_url('dafbagian/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="nama_daftar_bagian"><?= $title_sub ?></label>
                                <input type="text" class="form-control" name="nama_daftar_bagian" id="nama_daftar_bagian">
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>