<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-belajar/percakapan/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Percakapan</h4>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 text-right control-label col-form-label">Nama Orang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder=" Nama Orang">
                </div>
            </div>
            <div class="form-group row">
                <label for="kalimat" class="col-sm-3 text-right control-label col-form-label">Kalimat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="kalimat" name="kalimat" placeholder=" Kalimat">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_percakapan" class="col-sm-3 text-right control-label col-form-label">No. Percakapan</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="no_percakapan" name="no_percakapan" placeholder=" No. Percakapan">
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