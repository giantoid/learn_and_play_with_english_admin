<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datamateri/update') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data[0]->id_materi ?>">
        <div class="card-body">
            <h4 class="card-title">Edit Data Materi</h4>
            <div class="form-group row">
                <label for="nama_materi" class="col-sm-3 text-right control-label col-form-label">Nama Materi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_materi" name="nama_materi" value="<?= $data[0]->nama_materi ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Materi</label>
                <div class="col-sm-3">
                    <input type="hidden" name="glama" value="<?= $data[0]->materi ?>">
                    <img height="150" src="<?= base_url('assets/gambar/materi/' . $data[0]->materi) ?>" alt="">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="materi" name="materi" accept="image/*">
                        <label class="custom-file-label" for="materi">Ganti materi</label>
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