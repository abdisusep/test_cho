<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        <table class="table table-bordered">
        <?php $no=1; foreach($gp as $gjp) : ?>
            <tr>
                <td class="w-25"><b>1.<?= $kode.$no++ ?></b></td>
                <td><span><?= $gjp->kota ?></span></td>
                <td><span class="mr-4">IDR</span><span class="float-right mr-4"><?= number_format($gjp->idr, 0, ",", ",") ?></span></td>
                <td>
                    <a data-toggle="modal" data-target="#edit<?= $gjp->id_gaji_pokok ?>"><i class="fas fa-edit text-dark ml-2"></i></a>
                    <a href="<?= base_url('gajipokok/delete/'.$gjp->id_gaji_pokok.'/'.($gjp->deleted==1 ? '0' : '1')) ?>"><i class="fas fa-times text-danger ml-2"></i></a>
                    <div class="modal" id="edit<?= $gjp->id_gaji_pokok ?>" tabindex="-1" aria-labelledby="example<?= $gjp->id_gaji_pokok ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="example<?= $gjp->id_gaji_pokok ?>">Edit <?= $title_sub ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('gajipokok/update') ?>" method="POST">
                                        <input type="text" class="d-none" name="id_gaji_pokok" value="<?= $gjp->id_gaji_pokok ?>">
                                        <div class="form-group">
                                            <label for="kota">Kab/Kota</label>
                                            <input type="text" class="form-control" name="kota" id="kota" value="<?= $gjp->kota ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="idr">IDR</label>
                                            <input type="number" class="form-control" name="idr" id="idr" value="<?= $gjp->idr ?>">
                                        </div>
                                        <button type="submit" class="btn btn-dark">Update</button>
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
                        <h5 class="modal-title" id="example<?= $sub ?>">Tambah <?= $title_sub ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('gajipokok/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="kota">Kab/Kota</label>
                                <input type="text" class="form-control" name="kota" id="kota">
                            </div>
                            <div class="form-group">
                                <label for="idr">IDR</label>
                                <input type="number" class="form-control" name="idr" id="idr">
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>