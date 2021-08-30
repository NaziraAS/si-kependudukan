<div class="container">
    <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php if ($this->session->flashdata('message')) {
    } ?>
    <div class="row text-center">
        <div class="col-md-6">
            <h3>Penduduk datang</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('penduduk_datang') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col" colspan="3">Nama Lengkap</th>
                                <th scope="col" colspan="3">Alamat asal</th>
                                <th scope="col" colspan="3">Nomor surat</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penduduk as $p) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++ ?></td>
                                    <td scope="col"><?= $p['nik'] ?></td>
                                    <td scope="col"><?= $p['tgl'] ?></td>
                                    <td scope="col"><?= $p['nama'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"><?= $p['alamat_asal'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"><?= $p['nomor_surat'] ?></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"><a href="<?= base_url('Penduduk_datang/delete/') . $p['id'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('Penduduk_datang/edit/') . $p['id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>