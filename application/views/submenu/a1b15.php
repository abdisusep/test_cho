<div class="card">
    <div class="card-body">
        <p class="title-submenu font-weight-bold mb-3">1.<?= $kode.' '.$title_sub ?></p>       
        
        <table class="table table-bordered">
            <?php $no=1; foreach($iu as $infu) : ?>
            <tr>
                <td class="w-25"><b class="mr-4">1.<?= $kode.$no++ ?></b></td>
                <td colspan="3" class="font-weight-bold"><?= $infu->nama_informasi_umum ?></td>
            </tr>
                <?php $subinfo = $this->subinfoumum_model->get_data($infu->id_informasi_umum); ?>
                <?php $nmr=1; foreach($subinfo as $siu) : ?>
                <tr>
                    <td></td>
                    <td class="w-25"><b class="mr-4">1.<?= $kode.($no-1).'.'.$nmr++ ?></b></td>
                    <td>
                        <span class="<?= $siu->aktif == 1 ? 'text-success' : 'text-danger' ?>">
                            <?= $siu->nama_sub_informasi_umum ?>
                        </span>
                        <?php if($siu->tipe == 'select') : ?>
                            <a href="#" class="float-right mr-2" data-toggle="collapse" data-target="#collapse<?= $siu->id_sub_informasi_umum ?>" aria-expanded="false" aria-controls="collapse<?= $siu->id_sub_informasi_umum ?>"><i class="fas fa-plus text-dark"></i></a>
                        <?php endif; ?>
                        <a href="#" class="float-right mr-2" data-toggle="modal" data-target="#subID<?= $siu->id_sub_informasi_umum ?>"><i class="fas fa-edit text-dark"></i></a>
                        <div class="modal" id="subID<?= $siu->id_sub_informasi_umum ?>" tabindex="-1" aria-labelledby="examplesubID<?= $siu->id_sub_informasi_umum ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="examplesubID<?= $siu->id_sub_informasi_umum ?>">Ubah <?= $siu->nama_sub_informasi_umum ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('subinfoumum/update') ?>" method="POST">
                                            <input type="text" name="id_sub_info_umum" value="<?= $siu->id_sub_informasi_umum ?>" class="d-none">
                                            <div class="form-group">
                                                <label for="info_umum"><?= $infu->nama_informasi_umum ?></label>
                                                <input type="text" class="form-control" name="sub_info_umum" id="info_umum" value="<?= $siu->nama_sub_informasi_umum ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="info_umum">Tipe Input</label>
                                                <select class="form-control" name="tipe">
                                                    <option value="input-text" <?= $siu->tipe == 'input-text' ? 'selected' : '' ?>>Input Text</option>
                                                    <option value="input-number" <?= $siu->tipe == 'input-number' ? 'selected' : '' ?>>Input Number</option>
                                                    <option value="file" <?= $siu->tipe == 'file' ? 'selected' : '' ?>>Input File</option>
                                                    <option value="select" <?= $siu->tipe == 'select' ? 'selected' : '' ?>>Select Option</option>
                                                    <option value="textarea" <?= $siu->tipe == 'textarea' ? 'selected' : '' ?>>Textarea</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="tabel_select">Tabel Select (Jika tipe select)</label>
                                                <input type="text" class="form-control" name="tabel_select" id="tabel_select" value="<?= $siu->tabel_select ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="info_umum">Status</label>
                                                <select class="form-control" name="aktif">
                                                    <option value="1" <?= $siu->aktif == 1 ? 'selected' : '' ?>>Aktif</option>
                                                    <option value="0" <?= $siu->aktif == 0 ? 'selected' : '' ?>>Tidak Aktif</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-dark">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php if($siu->tipe == 'select') : ?>
                    <?php $tbl = $siu->tabel_select ?>
                    <?php $row = $this->db->get_where($tbl, ["deleted" => '0'])->result_array(); ?>
                    <?php $nom=1; foreach($row as $data) : ?>
                        <tr class="collapse" id="collapse<?= $siu->id_sub_informasi_umum ?>">
                            <td colspan="2"></td>
                            <td><?= '1.'.$kode.($no-1).'.'.($nmr-1).'.'.$nom++?> <span class="ml-3"><?= $data["nama_$tbl"] ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php endforeach; ?>
            <tr>
                <td></td>
                <td colspan="3">
                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ID<?= $infu->id_informasi_umum ?>">Tambah</a>
                    <div class="modal" id="ID<?= $infu->id_informasi_umum ?>" tabindex="-1" aria-labelledby="exampleID<?= $infu->id_informasi_umum ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleID<?= $infu->id_informasi_umum ?>">Tambah <?= $infu->nama_informasi_umum ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('subinfoumum/insert') ?>" method="POST">
                                        <input type="text" name="id_infoumum" value="<?= $infu->id_informasi_umum ?>" class="d-none">
                                        <div class="form-group">
                                            <label for="info_umum"><?= $infu->nama_informasi_umum ?></label>
                                            <input type="text" class="form-control" name="sub_info_umum" id="info_umum">
                                        </div>
                                        <div class="form-group">
                                            <label for="info_umum">Tipe Input</label>
                                            <select class="form-control" name="tipe">
                                                <option value="input-text">Input Text</option>
                                                <option value="input-number">Input Number</option>
                                                <option value="file">Input File</option>
                                                <option value="select">Select Option</option>
                                                <option value="textarea">Textarea</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tabel_select">Tabel Select (Jika tipe select)</label>
                                            <input type="text" class="form-control" name="tabel_select" id="tabel_select">
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
                        <h5 class="modal-title" id="example<?= $sub ?>">Tambah <?= $title_sub ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('infoumum/insert') ?>" method="POST">
                            <div class="form-group">
                                <label for="info_umum"><?= $title_sub ?></label>
                                <input type="text" class="form-control" name="info_umum" id="info_umum">
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>