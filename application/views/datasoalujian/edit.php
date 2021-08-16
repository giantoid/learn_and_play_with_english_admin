<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datasoalujian/update') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Edit Soal Ujian</h4>
            <input type="hidden" name="id_soal" value="<?= $data[0]->id_soal ?>">
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
                <label for="nama_soal" class="col-sm-3 text-right control-label col-form-label">Nama Soal</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_soal" name="nama_soal" value="<?= $data[0]->nama_soal ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass_murid" class="col-sm-3 text-right control-label col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="pass_murid" name="pass_murid" value="<?= $data[0]->pass_murid ?>">
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