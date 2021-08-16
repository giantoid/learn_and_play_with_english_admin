<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datamateri/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Materi</h4>
            <div class="form-group row">
                <label for="id_materi" class="col-sm-3 text-right control-label col-form-label">ID Materi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_materi" name="id_materi" placeholder=" ID Materi">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_materi" class="col-sm-3 text-right control-label col-form-label">Nama Materi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_materi" name="nama_materi" placeholder=" Nama Materi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Materi</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="materi" name="materi" accept="image/*" required>
                        <label class="custom-file-label" for="materi">Pilih gambar...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
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