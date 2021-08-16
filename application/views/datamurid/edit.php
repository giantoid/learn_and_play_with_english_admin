<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datamurid/update') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Edit Data Murid</h4>
            <div class="form-group row">
                <input type="hidden" name="id_murid" value="<?= $data[0]->id_murid ?>">
                <label for=" id_murid" class="col-sm-3 text-right control-label col-form-label">ID Murid</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_murid" value="<?= $data[0]->id_murid ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3  text-right control-label col-form-label">Nama Kelas</label>
                <div class="col-md-9">
                    <select name="id_kelas" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                        <?php
                        $datae = $this->m_master->kelas();
                        foreach ($datae as $dt) {
                            if ($data[0]->id_kelas == $dt->id_kelas) {
                                echo '
                            <option value="' . $dt->id_kelas . '" selected>' . $dt->nama_kelas . '</option>
                            ';
                            } else {
                                echo '
                            <option value="' . $dt->id_kelas . '">' . $dt->nama_kelas . '</option>
                            ';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_murid" class="col-sm-3 text-right control-label col-form-label">Nama Murid</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_murid" name="nama_murid" value="<?= $data[0]->nama_murid ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username" value="<?= $data[0]->username ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass_murid" class="col-sm-3 text-right control-label col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="pass_murid" name="pass_murid" placeholder="Kosongkan jika tidak ingin mengganti password">
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>