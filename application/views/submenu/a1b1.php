<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?> <?= $this->session->has_userdata('success'); ?></p>
        <?php $no=1; foreach($jk as $jenkel) : ?>
        <p class="p-submenu mb-1 mt-2">
            <b class="mr-4">1.<?= $kode.$no++ ?></b> <?= $jenkel->nama_jenis_kelamin ?>
            <span class="float-right text-danger mr-2">
                <a href="#" data-toggle="modal" data-target="#edit<?= $jenkel->id_jenis_kelamin ?>"><i class="fas fa-edit text-dark"></i></a>
                <a href="<?= base_url('jeniskelamin/delete/'.$jenkel->id_jenis_kelamin.'/'.($jenkel->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                <div class="modal" id="edit<?= $jenkel->id_jenis_kelamin ?>" tabindex="-1" aria-labelledby="example<?= $jenkel->id_jenis_kelamin ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="example<?= $jenkel->id_jenis_kelamin ?>">Edit <?= $title_sub ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('jeniskelamin/update') ?>" method="POST">
                                    <input type="text" class="d-none" name="id_jenis_kelamin" value="<?= $jenkel->id_jenis_kelamin ?>">
                                    <div class="form-group">
                                        <label for="jk"><?= $title_sub ?></label>
                                        <input type="text" class="form-control" name="nama_jenis_kelamin" id="jk" value="<?= $jenkel->nama_jenis_kelamin ?>" required>
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
        <a href="#" class="btn btn-primary mt-2" data-toggle="modal" data-target="#<?= $sub ?>">Tambah</a>
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
                        <form action="<?= base_url('jeniskelamin/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="jk"><?= $title_sub ?></label>
                                <input type="text" class="form-control" name="nama_jenis_kelamin" id="jk" required>
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>