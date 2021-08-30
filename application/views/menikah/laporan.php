<div class="container">
    <div class="row">
        <div class="col-md">
            <h3 class="text-center">LAPORAN DATA BULANAN MENIKAH</h3>
            <h3 class="text-center">DESA NAMLEA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md ml-4">
            <!-- <button type="buttoon" class="btn btn-primary">Date</button>
            <button type="buttoon" class="btn btn-danger">Date</button> -->
            <a href="<?= base_url('menikah/cetaklap') ?>" target="_blank" class="btn btn-warning">Cetak</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Tempat Menikah</th>
                                <th scope="col">Tanggal Pernikahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $d) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++ ?></td>
                                    <td scope="col"><?= $d['nik'] ?></td>
                                    <td scope="col"><?= $d['tempat_menikah'] ?></td>
                                    <td scope="col"><?= $d['tgl_pernikahan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>