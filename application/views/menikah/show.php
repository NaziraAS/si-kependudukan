<div class="container">
    <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php if ($this->session->flashdata('message')) {
    } ?>
    <div class="row text-center">
        <div class="col-md-6">
            <h3>Menikah</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('menikah') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Menikah
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Tempat Menikah</th>
                                <th scope="col">Tanggal Pernikahan</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($menikah as $m) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++ ?></td>
                                    <td scope="col"><?= $m['nik_penduduk'] ?></td>
                                    <td scope="col"><?= $m['tgl_pernikahan'] ?></td>
                                    <td scope="col"><?= $m['tempat_menikah'] ?></td>
                                    <td scope="col"><a href="<?= base_url('Menikah/delete/') . $m['id_menikah'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('Menikah/edit/') . $m['id_menikah'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>