<div class="container">
    <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php if ($this->session->flashdata('message')) {
    } ?>
    <div class="row text-center">
        <div class="col-md-6">
            <h3>Kepala desa</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('kepala_desa') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Menikah
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nip</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kades as $k) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no ?></td>
                                    <td scope="col"><?= $k['nip'] ?></td>
                                    <td scope="col"><?= $k['nama'] ?></td>
                                    <td scope="col"><?= $k['status'] ?></td>
                                    <td scope="col"><a href="<?= base_url('Kepala_desa/delete/') . $k['id_kepala_desa'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('Kepala_desa/edit/') . $k['id_kepala_desa'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>