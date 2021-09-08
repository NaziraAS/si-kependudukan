<div class="container">
    <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php if ($this->session->flashdata('message')) {
    } ?>
    <div class="row text-center">
        <div class="col-md">
            <h3>Kematian</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('kematian') ?>" class="btn btn-primary">Tambah</a>
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
                                <th scope="col">Nik</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">jam</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Sebab kematian</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nik ibu</th>
                                <th scope="col">Nik ayah</th>
                                <th scope="col">Nik saksi</th>
                                <th scope="col">NIk pelapor</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kematian as $k) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++ ?></td>
                                    <td scope="col"><?= $k['nik'] ?></td>
                                    <td scope="col"><?= $k['hari'] ?></td>
                                    <td scope="col"><?= $k['tgl_kematian'] ?></td>
                                    <td scope="col"><?= $k['jam'] ?></td>
                                    <td scope="col"><?= $k['tempat_kematian'] ?></td>
                                    <td scope="col"><?= $k['umur'] ?></td>
                                    <td scope="col"><?= $k['sebab_kematian'] ?></td>
                                    <td scope="col"><?= $k['status'] ?></td>
                                    <td scope="col"><?= $k['nik_ayah'] ?></td>
                                    <td scope="col"><?= $k['nik_ibu'] ?></td>
                                    <td scope="col"><?= $k['nik_saksi'] ?></td>
                                    <td scope="col"><?= $k['nik_pelapor'] ?></td>
                                    <td scope="col"><a href="<?= base_url('Kematian/delete/') . $k['id_kematian'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('Kematian/edit/') . $k['id_kematian'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>