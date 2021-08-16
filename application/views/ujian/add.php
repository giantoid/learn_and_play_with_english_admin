<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('ujian/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Soal Ujian</h4>
            <div class="form-group row">
                <label class="col-sm-2 text-right control-label col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="gambar">Pilih gambar...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_soal" class="col-sm-2 text-right control-label col-form-label">Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_soal" name="nama_soal" placeholder=" Soal">
                </div>
            </div>
            <div class="form-group row">
                <label for="a" class="col-sm-2 text-right control-label col-form-label">Jawaban A</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="a" name="a" placeholder=" Jawaban">
                </div>
                <!-- jawaban -->
                <!-- <div class="col-md-1">
                    <select class="select2 form-control custom-select" name="benar[0]" style="width: 100%; height:36px;">
                        <option value="no">Salah</option>
                        <option value="yes">Benar</option>
                    </select>
                </div> -->
            </div>
            <div class="form-group row">
                <label for="b" class="col-sm-2 text-right control-label col-form-label">Jawaban B</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="b" name="b" placeholder=" Jawaban">
                </div>
            </div>
            <div class="form-group row">
                <label for="c" class="col-sm-2 text-right control-label col-form-label">Jawaban C</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="c" name="c" placeholder=" Jawaban">
                </div>
            </div>
            <div class="form-group row">
                <label for="d" class="col-sm-2 text-right control-label col-form-label">Jawaban D</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="d" name="d" placeholder=" Jawaban">
                </div>
            </div>
            <div class="form-group row">
                <label for="true" class="col-sm-2 text-right control-label col-form-label">Jawaban benar</label>
                <div class="col-sm-9">
                    <select name="true" class="form-control" id="true">
                        <option value="">-- Pilih jawaban yang benar --</option>
                        <option value="a">Jawaban A</option>
                        <option value="b">Jawaban B</option>
                        <option value="c">Jawaban C</option>
                        <option value="d">Jawaban D</option>
                    </select>
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