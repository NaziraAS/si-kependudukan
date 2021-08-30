<div class="card">
    <div class="card-header text-center">
        <h2>Laporan Data Kelahiran</h2>
        <h3>Desa Namlea</h3>
    </div>
    <ul class="list-group">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama bayi</th>
                    <th scope="col">Tempat lahir</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Panjang</th>
                    <th scope="col">Tempat di lahirkan</th>
                    <th scope="col">Kelahiran ke</th>
                    <th scope="col">Nik ibu</th>
                    <th scope="col">Nik ayah</th>
                    <th scope="col">NIk pelapor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $k) :
                ?>
                    <tr>
                        <td scope="col"><?= $no++; ?></td>
                        <td scope="col"><?= $k['nama_bayi'] ?></td>
                        <td scope="col"><?= $k['tempat_lahir'] ?></td>
                        <td scope="col"><?= $k['tgl_lahir'] ?></td>
                        <td scope="col"><?= $k['jenis_kelamin'] ?></td>
                        <td scope="col"><?= $k['jam'] ?></td>
                        <td scope="col"><?= $k['berat'] ?></td>
                        <td scope="col"><?= $k['tempat_dilahirkan'] ?></td>
                        <td scope="col"><?= $k['kelahiran_ke'] ?></td>
                        <td scope="col"><?= $k['nik_ibu'] ?></td>
                        <td scope="col"><?= $k['nik_ayah'] ?></td>
                        <td scope="col"><?= $k['nik_pelapor'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </ul>
</div>

<script>
    window.print();
</script>