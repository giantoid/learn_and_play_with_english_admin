<div class="card">
    <div class="card-body">
        <a href="<?= base_url('datasoalujian/edit/' . $data[0]->id_soal) ?>" type="button" class="btn btn-primary mb-1 float-right">Edit Data</a>
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
                <td>Nama Soal</td>
                <td><?= $data[0]->nama_soal ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?= $data[0]->pass_murid ?></td>
            </tr>
        </tbody>
    </table>
</div>