<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-kamus/kategori/update') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data[0]->id_kategori ?>">
        <div class="card-body">
            <h4 class="card-title">Edit Data kategori</h4>
            <div class="form-group row">
                <label for="nama_kategori" class="col-sm-3 text-right control-label col-form-label">Nama Kategori</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $data[0]->nama_kategori ?>">
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