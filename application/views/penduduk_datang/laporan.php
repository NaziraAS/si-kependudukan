<div class="container">
    <div class="row">
        <div class="col-md">
            <h3 class="text-center">LAPORAN DATA BULANAN PENDUDUK DATANG</h3>
            <h3 class="text-center">DESA NAMLEA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md ml-4">
            <!-- <button type="buttoon" class="btn btn-primary">Date</button>
            <button type="buttoon" class="btn btn-danger">Date</button> -->
            <a href="<?= base_url('penduduk_datang/cetaklap') ?>" target="_blank" class="btn btn-warning">Cetak</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat asal</th>
                                <th scope="col">Alamat tujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $d) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++; ?></td>
                                    <td scope="col"><?= $d['nik'] ?></td>
                                    <td scope="col"><?= $d['tgl'] ?></td>
                                    <td scope="col"><?= $d['nama'] ?></td>
                                    <td scope="col"><?= $d['alamat_asal'] ?></td>
                                    <td scope="col"><?= $d['alamat_tujuan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>