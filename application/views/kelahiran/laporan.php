<div class="container">
    <div class="row">
        <div class="col-md">
            <h3 class="text-center">LAPORAN DATA BULANAN KELAHIRAN</h3>
            <h3 class="text-center">DESA NAMLEA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md ml-4">
            <!-- <button type="button" class="btn btn-primary">Date</button>
            <button type="button" class="btn btn-danger">Date</button> -->
            <a href="<?= base_url('kelahiran/cetaklap') ?>" target="_blank" type="buttoon" class="btn btn-warning">Cetak</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" colspan="2">Nama bayi</th>
                                <th scope="col"></th>
                                <th scope="col">Tempat lahir</th>
                                <th scope="col">Tgl lahir</th>
                                <th class="col" colspan="2">Jenis kelamin</th>
                                <th scope="col"></th>
                                <th scope="col" colspan="2">Jam</th>
                                <th scope="col"></th>
                                <th scope="col" colspan="2">Berat</th>
                                <th scope="col"></th>
                                <th scope="col">Panjang</th>
                                <th scope="col" colspan="3">Tempat di lahirkan</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Kelahiran ke</th>
                                <th scope="col">Nik ibu</th>
                                <th scope="col" colspan="3">Nik ayah</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col" colspan="2">NIk pelapor</th>
                                <th scope="col"></th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kelahiran as $k) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++; ?></td>
                                    <td scope="col" colspan="2"><?= $k['nama_bayi'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col"><?= $k['tempat_lahir'] ?></td>
                                    <td scope="col"><?= $k['tgl_lahir'] ?></td>
                                    <td scope="col" colspan="2"><?= $k['jenis_kelamin'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col" colspan="2"><?= $k['jam'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col" colspan="2"><?= $k['berat'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col" colspan="3"><?= $k['tempat_dilahirkan'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"><?= $k['kelahiran_ke'] ?></td>
                                    <td scope="col"><?= $k['nik_ibu'] ?></td>
                                    <td scope="col" colspan="3"><?= $k['nik_ayah'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col" colspan="2"><?= $k['nik_pelapor'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col">hasil</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>