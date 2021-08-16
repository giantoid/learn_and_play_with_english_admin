<div class="card">
    <form class="form-horizontal" method="post" action="<?= base_url('tebakgambar/insert') ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Tambah Tebak Gambar</h4>
            <div class="form-group row">
                <label class="col-md-3 m-t-15">Gambar</label>
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" name="id_kamus" style="width: 100%; height:36px;">
                        <option>-- Pilih gambar... --</option>
                        <?php $data = $this->m_master->kamus();
                        foreach ($data as $dt) {
                            echo "<option value=$dt->id_kamus>$dt->english</option>";
                        }
                        ?>
                    </select>
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