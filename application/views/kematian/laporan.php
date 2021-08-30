<div class="container">
    <div class="row">
        <div class="col-md">
            <h3 class="text-center">LAPORAN DATA BULANAN KEMATIAN</h3>
            <h3 class="text-center">DESA NAMLEA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md ml-4">
            <!-- <button type="button" class="btn btn-primary">Date</button>
            <button type="button" class="btn btn-danger">Date</button> -->
            <a href="<?= base_url('kematian/cetaklap') ?>" target="_blank" class="btn btn-warning">Cetak</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>