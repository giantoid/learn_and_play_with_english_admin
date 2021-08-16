<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-belajar/percakapan/update') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Edit Percakapan</h4>
            <input type="hidden" name="id_percakapan" value="<?= $data[0]->id_percakapan ?>">
            <div class="form-group row">
                <label for="nama" class="col-sm-3 text-right control-label col-form-label">Nama Orang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data[0]->nama ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kalimat" class="col-sm-3 text-right control-label col-form-label">kalimat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="kalimat" name="kalimat" value="<?= $data[0]->kalimat ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_percakapan" class="col-sm-3 text-right control-label col-form-label">no_percakapan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="no_percakapan" name="no_percakapan" value="<?= $data[0]->no_percakapan ?>">
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