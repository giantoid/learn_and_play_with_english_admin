<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-belajar/alfabet/update') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data[0]->id_alfabet ?>">
        <div class="card-body">
            <h4 class="card-title">Edit Data Alfabet</h4>
            <div class="form-group row">
                <label for="nama_alfabet" class="col-sm-3 text-right control-label col-form-label">Nama Alfabet</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_alfabet" name="nama_alfabet" value="<?= $data[0]->nama_alfabet ?>">
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