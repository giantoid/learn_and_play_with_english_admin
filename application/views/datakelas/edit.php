<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datakelas/update') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data[0]->id_kelas ?>">
        <div class="card-body">
            <h4 class="card-title">Edit Data Kelas</h4>
            <div class="form-group row">
                <label for="bhs_indonesia" class="col-sm-3 text-right control-label col-form-label">Nama Kelas</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $data[0]->nama_kelas ?>">
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