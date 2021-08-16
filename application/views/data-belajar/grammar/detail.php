<div class="card">
    <div class="card-body">
        <a href="<?= base_url('data-belajar/grammar/edit/' . $data[0]->id_grammar) ?>" type="button" class="btn btn-primary mb-1 float-right">Edit Data</a>
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
                <td>Nama Murid</td>
                <td><?= $data[0]->nama_grammar ?></td>
            </tr>
        </tbody>
    </table>
</div>