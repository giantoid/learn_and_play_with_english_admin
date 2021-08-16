<div class="card">
    <div class="card-body">
        <a href="<?= base_url('ujian/edit/' . $data[0]->id_soal) ?>" type="button" class="btn btn-primary mb-1 float-right">Edit Data</a>
    </div>
    <table class="table">
        <!-- <thead>
            <tr>
                <th scope="col">Browser</th>
                <th scope="col">Visits</th>
            </tr>
        </thead> -->
        <tbody>
            <?php
            if ($data[0]->gambar != null) { ?>
                <tr>
                    <td>Gambar</td>
                    <td><img height="150" src="<?= base_url('assets/gambar/ujian/' . $data[0]->gambar) ?>" alt=""></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td>Soal</td>
                <td><?= $data[0]->nama_soal ?></td>
            </tr>
            <tr>
                <td>Jawaban</td>
                <td>
                    <ul>
                        <li><?= "A. " . $data[0]->a; ?></li>
                        <li><?= "B. " . $data[0]->b; ?></li>
                        <li><?= "C. " . $data[0]->c; ?></li>
                        <li><?= "D. " . $data[0]->d; ?></li>
                    </ul>
                </td>
            <tr>
                <td>Jawaban Benar</td>
                <td><?= "Jawaban " . strtoupper($data[0]->true) ?></td>
            </tr>
        </tbody>
    </table>
</div>