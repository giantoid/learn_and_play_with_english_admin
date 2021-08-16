<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datanilai/update') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Edit Data Nilai</h4>
            <input type="hidden" name="id_nilai" value="<?= $data[0]->id_nilai ?>">
            <div class="form-group row">
                <label class="col-sm-3  text-right control-label col-form-label">Nama Murid</label>
                <div class="col-md-9">
                    <select name="id_murid" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                        <?php
                        $datae = $this->m_master->murid();
                        foreach ($datae as $dt) {
                            if ($data[0]->id_murid == $dt->id_murid) {
                                echo '
                            <option value="' . $dt->id_murid . '" selected>' . $dt->nama_murid . '</option>
                            ';
                            } else {
                                echo '
                            <option value="' . $dt->id_murid . '">' . $dt->nama_murid . '</option>
                            ';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3  text-right control-label col-form-label">Nama Materi</label>
                <div class="col-md-9">
                    <select name="id_materi" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                        <?php
                        $datae = $this->m_master->materi();
                        foreach ($datae as $dt) {
                            if ($data[0]->id_materi == $dt->id_materi) {
                                echo '
                            <option value="' . $dt->id_materi . '" selected>' . $dt->nama_materi . '</option>
                            ';
                            } else {
                                echo '
                            <option value="' . $dt->id_materi . '">' . $dt->nama_materi . '</option>
                            ';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_murid" class="col-sm-3 text-right control-label col-form-label">Nilai</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $data[0]->nilai ?>">
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