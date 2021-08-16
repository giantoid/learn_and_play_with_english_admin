<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('data-kamus/kamus/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Data Kamus</h4>
            <div class="form-group row">
                <label for="indonesia" class="col-sm-3 text-right control-label col-form-label">Bahasa Indonesia</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="indonesia" name="indonesia" placeholder=" Bahasa Indonesia">
                </div>
            </div>
            <div class="form-group row">
                <label for="english" class="col-sm-3 text-right control-label col-form-label">Bahasa Inggris</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="english" name="english" placeholder="Bahasa Inggris">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 m-t-15">Kategori</label>
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" name="id_kategori" style="width: 100%; height:36px;">
                        <option>-- Pilih kategori... --</option>
                        <?php $data = $this->m_master->kategori_kamus();
                        foreach ($data as $dt) {
                            echo "<option value=$dt->id_kategori>$dt->nama_kategori</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Gambar</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" accept="image/*" required>
                        <label class="custom-file-label" for="gambar">Pilih gambar...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label class="col-sm-3 text-right control-label col-form-label">Suara</label>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="suara" name="suara" accept="audio/*" required>
                        <label class="custom-file-label" for="suara">Pilih suara...</label>
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