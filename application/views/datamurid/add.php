<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datamurid/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Murid</h4>
            <div class="form-group row">
                <label for="id_murid" class="col-sm-3 text-right control-label col-form-label">ID Murid</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_murid" name="id_murid" placeholder=" ID Murid">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3  text-right control-label col-form-label">Nama Kelas</label>
                <div class="col-md-9">
                    <select name="id_kelas" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                        <?php
                        $data = $this->m_master->kelas();
                        foreach ($data as $dt) {
                            echo '
                            <option value="' . $dt->id_kelas . '">' . $dt->nama_kelas . '</option>
                            ';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_murid" class="col-sm-3 text-right control-label col-form-label">Nama Murid</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_murid" name="nama_murid" placeholder=" Nama Murid">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username" placeholder=" Username">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass_murid" class="col-sm-3 text-right control-label col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="pass_murid" name="pass_murid" placeholder=" Password">
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