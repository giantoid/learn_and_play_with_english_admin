<div class="card">
    <div class="card-body">
        <a href="<?= base_url('datamateri/edit/' . $data[0]->id_materi) ?>" type="button" class="btn btn-primary mb-1 float-right">Edit Data</a>
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
                <td>Nama Materi</td>
                <td><?= $data[0]->nama_materi ?></td>
            </tr>
            <tr>
                <td>Materi</td>
                <td><?= $data[0]->materi ?></td>
            </tr>
        </tbody>
    </table>
</div>