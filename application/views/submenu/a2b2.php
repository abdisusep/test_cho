<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        
        <table class="table table-bordered">
        <?php $no=1; foreach($gol as $glg) : ?>
            <tr>
                <td class="w-25"><b class="mr-4">1.<?= $kode.$no++ ?></b></td>
                <td colspan="3" class="font-weight-bold"><?= $glg->nama_golongan ?></td>
                <td>
                    <div class="text-center">
                        <a href="#" data-toggle="modal" data-target="#edit<?= $glg->id_golongan ?>"><i class="fas fa-edit text-dark"></i></a>
                        <a href="<?= base_url('golongan/delete/'.$glg->id_golongan.'/'.($glg->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                    </div>
                    <div class="modal" id="edit<?= $glg->id_golongan ?>" tabindex="-1" aria-labelledby="example<?= $glg->id_golongan ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="example<?= $glg->id_golongan ?>">Edit <?= $title_sub ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('golongan/update') ?>" method="POST">
                                        <input type="text" class="d-none" name="id_golongan" value="<?= $glg->id_golongan ?>">
                                        <div class="form-group">
                                            <label for="nama_golongan"><?= $title_sub ?></label>
                                            <input type="text" class="form-control" name="nama_golongan" id="nama_golongan" value="<?= $glg->nama_golongan ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php $subgol = $this->subgolongan_model->get_data($glg->id_golongan); ?>
            <?php $nmr=1; foreach($subgol as $sg) : ?>
            <tr>
                <td></td>
                <td class="w-25">1.<?= $kode.($no-1).'.'.$nmr++ ?></td>
                <td><?= $sg->nama_sub_golongan ?></td>
                <td class="w-25 text-right"><?= number_format($sg->jumlah, 0, ",", ",") ?></td>
                <td>
                    <div class="text-center">
                        <a href="#" data-toggle="modal" data-target="#edit<?= $sg->id_sub_golongan ?>"><i class="fas fa-edit text-dark"></i></a>
                        <a href="<?= base_url('subgolongan/delete/'.$sg->id_sub_golongan.'/'.($sg->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2 mr-2"></i></a>
                    </div>
                    <div class="modal" id="edit<?= $sg->id_sub_golongan ?>" tabindex="-1" aria-labelledby="example<?= $glg->id_golongan ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="example<?= $sg->id_sub_golongan ?>">Edit Sub <?= $title_sub ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('subgolongan/update') ?>" method="POST">
                                        <input type="text" class="d-none" name="id_sub_golongan" value="<?= $sg->id_sub_golongan ?>">
                                        <div class="form-group">
                                            <label for="nama_sub_golongan">Sub <?= $title_sub ?></label>
                                            <input type="text" class="form-control" name="nama_sub_golongan" id="nama_sub_golongan" value="<?= $sg->nama_sub_golongan ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah</label>
                                            <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?= $sg->jumlah ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td></td>
                <td colspan="3">
                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ID<?= $glg->id_golongan ?>">Tambah</a>
                    <div class="modal" id="ID<?= $glg->id_golongan ?>" tabindex="-1" aria-labelledby="example<?= $sub ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="example<?= $sub ?>">Tambah <?= $glg->nama_golongan ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('subgolongan/insert') ?>" method="POST">
                                        <input type="text" class="d-none" name="id_golongan" value="<?= $glg->id_golongan ?>">
                                        <div class="form-group">
                                            <label for="nama_sub_golongan">Sub Golongan</label>
                                            <input type="text" class="form-control" name="nama_sub_golongan" id="nama_sub_golongan">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah</label>
                                            <input type="number" class="form-control" name="jumlah" id="jumlah">
                                        </div>
                                        <button type="submit" class="btn btn-dark">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>

        <a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#<?= $sub ?>">Tambah</a>
        <div class="modal" id="<?= $sub ?>" tabindex="-1" aria-labelledby="example<?= $sub ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example<?= $sub ?>">Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('golongan/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="nama_golongan">Golongan</label>
                                <input type="text" class="form-control" name="nama_golongan" id="nama_golongan">
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>