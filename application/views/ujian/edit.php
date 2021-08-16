<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('ujian/update') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Edit Soal Ujian</h4>
            <input type="hidden" name="id_soal" value="<?= $data[0]->id_soal ?>">
            <div class="form-group row">
                <label class="col-sm-2 text-right control-label col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="hidden" name="glama" value="<?= $data[0]->gambar ?>">
                    <img height="150" src="<?= base_url('assets/gambar/' . $data[0]->gambar) ?>" alt="">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="gambar">Ganti gambar</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_soal" class="col-sm-2 text-right control-label col-form-label">Soal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_soal" name="nama_soal" value="<?= $data[0]->nama_soal ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="a" class="col-sm-2 text-right control-label col-form-label">Jawaban A</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="a" name="a" value="<?= $data[0]->a; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="b" class="col-sm-2 text-right control-label col-form-label">Jawaban B</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="b" name="b" value="<?= $data[0]->b; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="c" class="col-sm-2 text-right control-label col-form-label">Jawaban C</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="c" name="c" value="<?= $data[0]->c; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="d" class="col-sm-2 text-right control-label col-form-label">Jawaban D</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="d" name="d" value="<?= $data[0]->d; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="true" class="col-sm-2 text-right control-label col-form-label">Jawaban Benar</label>
                <div class="col-sm-9">
                    <select name="true" id="true" class="form-control">
                        <?php
                        echo ($data[0]->true == "a") ? '<option value="a" selected>Jawaban A</option>' : '<option value="a">Jawaban A</option>';
                        echo ($data[0]->true == "b") ? '<option value="b" selected>Jawaban B</option>' : '<option value="b">Jawaban B</option>';
                        echo ($data[0]->true == "c") ? '<option value="c" selected>Jawaban C</option>' : '<option value="c">Jawaban C</option>';
                        echo ($data[0]->true == "d") ? '<option value="d" selected>Jawaban D</option>' : '<option value="d">Jawaban D</option>';
                        ?>
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