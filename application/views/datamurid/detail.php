<div class="card">
    <div class="card-body">
        <a href="<?= base_url('datamurid/edit/' . $data[0]->id_murid) ?>" type="button" class="btn btn-primary mb-1 float-right">Edit Data</a>
    </div>
    <table class="table">
        <!-- <thead>
            <tr>
                <th scope="col">Browser</th>
                <th scope="col">Visits</th>
            </tr>
        </thead> -->
        <tbody>
            <tr>
                <td>ID Murid</td>
                <td><?= $data[0]->id_murid ?></td>
            </tr>
            <tr>
                <td>Nama Kelas</td>
                <td><?= $data[0]->nama_kelas ?></td>
            </tr>
            <tr>
                <td>Nama Murid</td>
                <td><?= $data[0]->nama_murid ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?= $data[0]->username ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?= $data[0]->pass_murid ?></td>
            </tr>
        </tbody>
    </table>
</div>