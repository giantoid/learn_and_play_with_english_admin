<div class="card">
    <div class="card-body">
        <a href="<?= base_url('data-kamus/kamus/edit/' . $data[0]->id_kamus) ?>" type="button" class="btn btn-primary mb-1 float-right">Edit Data</a>
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
                <td>Bahasa Indonesia</td>
                <td><?= $data[0]->indonesia ?></td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td><?= $data[0]->english ?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><?= $data[0]->nama_kategori ?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><img height="150" src="<?= base_url('assets/gambar/' . $data[0]->gambar) ?>" alt=""></td>
            </tr>
            <!-- <tr>
                <td>Suara</td>
                <td><audio controls src="<?= base_url('assets/suara/' . $data[0]->suara) ?>"></audio></td>
            </tr> -->
        </tbody>
    </table>
</div>