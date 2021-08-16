<div class="card">
    <?php
    $data = $objects[0];
    ?>
    <form class="form-horizontal" method="post" action="<?= base_url('users/update/' . $data->id_user) ?>" enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Ubah Data User</h4>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Nama<span class="text-danger">*</span>:</label>
                <div class="col-lg-9">
                    <input type="text" name="nama_user" class="form-control" value="<?= $data->nm_user ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Username<span class="text-danger">*</span>:</label>
                <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" value="<?= $data->username ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 m-t-15">Level<span class="text-danger">*</span>:</label>
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" name="level">
                        <?= ($data->level == 1) ?
                            '<option value="1" selected>1</option>
                        <option value="2">2</option>' :
                            '<option value="1">1</option>
                        <option value="2" selected>2</option>' ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Password</span>:</label>
                <div class="col-lg-9">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <p class="text-warning" style="font-size: 6; margin-top: -5"><i>Kosongkan jika tidak ingin mengubah password.</i></p>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Konfirmasi Password</span>:</label>
                <div class="col-lg-9">
                    <input type="password" name="password" id="konf_password" class="form-control" placeholder="Konfirmasi Password">
                    <p class="text-danger" id="konf" style="font-size: 6; margin-top: -5"><i>Password tidak sama</i></p>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" id="submit" class="btn btn-primary">Simpan <i class="icon-floppy-disk ml-2"></i></button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#konf').hide();
        $('#password').on('keyup', function() {
            var pass = $('#password').val();
            var konfpass = $('#konf_password').val();
            if (konfpass != "" && pass == konfpass) {
                $('#konf').hide();
            } else {
                $('#konf').show();
            }
        })
        $('#konf_password').on('keyup', function() {
            var pass = $('#password').val();
            var konfpass = $('#konf_password').val();
            if (pass != "" && pass == konfpass) {
                $('#konf').hide();
                $('#submit').show();
            } else {
                $('#konf').show();
                $('#submit').hide();
            }
        })
    })
</script>