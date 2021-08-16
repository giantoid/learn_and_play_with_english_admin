<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-kamus/kamus/update') ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data[0]->id_kamus ?>">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Kamus</h4>
            <div class="form-group row">
                <label for="indonesia" class="col-sm-3 text-right control-label col-form-label">Bahasa Indonesia</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="indonesia" name="indonesia" value="<?= $data[0]->indonesia ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="english" class="col-sm-3 text-right control-label col-form-label">Bahasa Inggris</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="english" name="english" value="<?= $data[0]->english ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 m-t-15">Kategori</label>
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" name="id_kategori" style="width: 100%; height:36px;">
                        <?php $datas = $this->m_master->kategori_kamus();
                        foreach ($datas as $dt) {
                            if ($data[0]->id_kategori == $dt->id_kategori) {
                                echo "<option value=$dt->id_kategori selected>$dt->nama_kategori</option>";
                            } else {
                                echo "<option value=$dt->id_kategori>$dt->nama_kategori</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Gambar</label>
                <div class="col-sm-3">
                    <input type="hidden" name="glama" value="<?= $data[0]->gambar ?>">
                    <img height="150" src="<?= base_url('assets/gambar/' . $data[0]->gambar) ?>" alt="">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*">
                        <label class="custom-file-label" for="gambar">Ganti gambar</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Suara</label>
                <div class="col-sm-3">
                    <input type="hidden" name="slama" value="<?= $data[0]->suara ?>">
                    <audio controls src="<?= base_url('assets/suara/' . $data[0]->suara) ?>"></audio>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="suara" name="suara" accept="audio/*">
                        <label class="custom-file-label" for="suara">Ganti suara</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>

<script src="<?= base_url() ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>