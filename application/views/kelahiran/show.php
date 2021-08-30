<div class="container">
    <div class="row text-center">
        <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
        <?php if ($this->session->flashdata('message')) {
        } ?>
        <div class="col-md">
            <h3>Kelahiran</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('kelahiran') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama bayi</th>
                                <th scope="col">Tempat lahir</th>
                                <th scope="col">Tgl lahir</th>
                                <th class="col">Jenis kelamin</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Panjang</th>
                                <th scope="col">Tempat di lahirkan</th>
                                <th scope="col">Kelahiran ke</th>
                                <th scope="col">Nik ibu</th>
                                <th scope="col">Nik ayah</th>
                                <th scope="col">NIk pelapor</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kelahiran as $k) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k['nama_bayi'] ?></td>
                                    <td><?= $k['tempat_lahir'] ?></td>
                                    <td><?= $k['tgl_lahir'] ?></td>
                                    <td><?= $k['jenis_kelamin'] ?></td>
                                    <td><?= $k['jam'] ?></td>
                                    <td><?= $k['berat'] ?></td>
                                    <td><?= $k['panjang'] ?></td>
                                    <td><?= $k['tempat_dilahirkan'] ?></td>
                                    <td><?= $k['kelahiran_ke'] ?></td>
                                    <td><?= $k['nik_ibu'] ?></td>
                                    <td><?= $k['nik_ayah'] ?></td>
                                    <td><?= $k['nik_pelapor'] ?></td>
                                    <td><a href="<?= base_url('Kelahiran/delete/') . $k['id_kelahiran'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('kelahiran/edit/') . $k['id_kelahiran'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>