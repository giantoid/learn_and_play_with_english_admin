<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('datakelas/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Kamus</h4>
            <div class="form-group row">
                <label for="nama_kelas" class="col-sm-3 text-right control-label col-form-label">Nama Kelas</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder=" Nama Kelas">
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