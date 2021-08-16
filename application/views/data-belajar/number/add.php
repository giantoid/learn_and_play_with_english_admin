<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-belajar/number/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Number</h4>
            <div class="form-group row">
                <label for="nama_number" class="col-sm-3 text-right control-label col-form-label">Nama Number</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="nama_number" name="nama_number" placeholder=" Nama Number">
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