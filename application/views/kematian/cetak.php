<div class="card">
    <div class="card-header text-center">
        <h2>Laporan Data Kematian</h2>
        <h3>Desa Namlea</h3>
    </div>
    <ul class="list-group">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tgl kematian</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Tempat Kematian</th>
                    <th scope="col">Anak ke</th>
                    <th scope="col">Sebab kematian</th>
                    <th scope="col">Nik ayah</th>
                    <th scope="col">Nik ibu</th>
                    <th scope="col">Nik saksi</th>
                    <th scope="col">NIk pelapor</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data as $d) :
                ?>
                    <tr>
                        <td scope="col"><?= $no++ ?></td>
                        <td scope="col"><?= $d['nik'] ?></td>
                        <td scope="col"><?= $d['hari'] ?></td>
                        <td scope="col"><?= $d['tgl_kematian'] ?></td>
                        <td scope="col"><?= $d['jam'] ?></td>
                        <td scope="col"><?= $d['tempat_kematian'] ?></td>
                        <td scope="col"><?= $d['anak_ke'] ?></td>
                        <td scope="col"><?= $d['sebab_kematian'] ?></td>
                        <td scope="col"><?= $d['nik_ayah'] ?></td>
                        <td scope="col"><?= $d['nik_ibu'] ?></td>
                        <td scope="col"><?= $d['nik_saksi'] ?></td>
                        <td scope="col"><?= $d['nik_pelapor'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </ul>
</div>

<script>
    window.print();
</script>