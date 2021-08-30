<div class="container">
    <div class="row">
        <div class="col-md">
            <h3 class="text-center">LAPORAN DATA BULANAN PENDUDUK</h3>
            <h3 class="text-center">DESA NAMLEA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md ml-4">
            <!-- <button type="button" class="btn btn-primary">Date</button>
            <button type="button" class="btn btn-danger">Date</button> -->
            <a href="<?= base_url('penduduk/cetaklap') ?>" target="_blank" type="button" class="btn btn-warning">Cetak</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nik</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col" colspan="2">Tempat lahir</th>
                                            <th scope="col" colspan="2">Tgl. lahir</th>
                                            <th scope="col">Agama</th>
                                            <!-- <th scope="col" colspan="3">Status perkawinan</th> -->
                                            <th scope="col">Pekerjaan</th>
                                            <th scope="col">Pendidikan</th>
                                            <th scope="col" colspan="3">Golongan Darah</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col" colspan="2">Jenis Kelamin</th>
                                            <th scope="col"></th>
                                            <th scope="col" colspan="2">Nama Ayah</th>
                                            <th scope="col" colspan="2">Nama Ibu</th>
                                            <th scope="col">Opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($penduduk as $p) :
                                        ?>
                                            <tr>
                                                <td scope="col"><?= $no++; ?></td>
                                                <td scope="col"><?= $p['nik'] ?></td>
                                                <td scope="col"><?= $p['nama'] ?></td>
                                                <td scope="col"><?= $p['alamat'] ?></td>
                                                <td scope="col"><?= $p['tempat_lahir'] ?></td>
                                                <td scope="col"></td>
                                                <td scope="col"><?= $p['tgl_lahir'] ?></td>
                                                <td scope="col"></td>
                                                <td scope="col"><?= $p['agama'] ?></td>
                                                <td scope="col"><?= $p['pekerjaan'] ?></td>
                                                <td scope="col"><?= $p['pendidikan'] ?></td>
                                                <td scope="col"><?= $p['golongan_darah'] ?></td>
                                                <td scope="col"></td>
                                                <td scope="col"></td>
                                                <td scope="col"><?= $p['jenis_kelamin'] ?></td>
                                                <td scope="col"></td>
                                                <td scope="col" colspan="2"><?= $p['nama_ayah'] ?></td>
                                                <td scope="col"></td>
                                                <td scope="col"><?= $p['nama_ibu'] ?></td>
                                                <td scope="col"></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>