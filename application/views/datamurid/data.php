<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <h5 class="card-title col-6">Data Murid</h5>
            <div class="col-6 pr-3">
                <a href="<?= base_url('datamurid/tambah') ?>" type="button" class="btn btn-primary mb-1 float-right">Tambah Data Murid</a>
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
                        <th>Nama Kelas</th>
                        <th>Nama Murid</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($objects as $obj) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $obj->nama_kelas ?></td>
                            <td><?= $obj->nama_murid ?></td>
                            <td><?= $obj->username ?></td>
                            <td width=15%>
                                <a href="<?= base_url('datamurid/detail/' . $obj->id_murid) ?>" type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-eye"></i></a>
                                <a href="<?= base_url('datamurid/edit/' . $obj->id_murid) ?>" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil"></i></a>
                                <span data-toggle="modal" data-target="#modalHapus">
                                    <button type="button" class="btn btn-danger btn-sm bthapus" data-id="<?= $obj->id_murid ?>" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="mdi mdi-delete"></i></button>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="modal" id="modalHapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('datamurid/delete') ?>">
                    <p>Apakah Anda yakin ingin menghapus data tersebut?</p>
                    <input type="hidden" id="idhapus" name="id">
                    <input type="hidden" id="hgambar" name="hgambar">
                    <input type="hidden" id="hsuara" name="hsuara">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btyes">Yakin</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('.bthapus').click(function() {
        var id = $(this).data('id');
        $('#idhapus').val(id);
    })
</script>