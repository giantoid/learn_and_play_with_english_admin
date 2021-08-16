<div class="card">
    <div class="card-body">
        <div class="row">
            <h5 class="card-title col-6">Data User</h5>
            <div class="col-6 pr-3">
                <a href="<?= base_url('users/tambah') ?>" type="button" class="btn btn-primary mb-1 float-right">Tambah User</a>
            </div>
        </div>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success border-0 alert-dismissible fade-show">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php
        } ?>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($objects as $obj) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $obj->nm_user ?></td>
                            <td><?= $obj->username ?></td>
                            <td><?= $obj->level ?></td>
                            <td width=15%>
                                <a href="<?= base_url('users/edit/' . $obj->id_user) ?>" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil"></i></a>
                                <span data-toggle="modal" data-target="#modalHapus">
                                    <button type="button" class="btn btn-danger btn-sm bthapus" data-id="<?= $obj->id_user ?>" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="mdi mdi-delete"></i></button>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /datatable -->

<!-- Modal Hapus -->
<div id="modalHapus" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url('users/delete') ?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <h6>Apakah anda yakin ingin menghapus?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn bg-danger">Iya</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /Modal Hapus -->

<script type="text/javascript">
    $('.bthapus').on('click', function() {
        const id = $(this).data('id');
        $('#id').val(id);
    });
</script>