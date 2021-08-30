<div class="container">
    <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php if ($this->session->flashdata('message')) {
    } ?>
    <div class="row text-center">
        <div class="col-md-6">
            <h3>Penduduk pindah</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('penduduk_pindah') ?>" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
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
                                <th scope="col">Nomor surat</th>
                                <th scope="col">Alasan pindah</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($penduduk as $p) :
                            ?>
                                <tr>
                                    <td scope="col"><?= $no++ ?></td>
                                    <td scope="col"><?= $p['nik'] ?></td>
                                    <td scope="col"><?= $p['tgl'] ?></td>
                                    <td scope="col"><?= $p['nama'] ?></td>
                                    <td scope="col"><?= $p['alamat_asal'] ?></td>
                                    <td scope="col"><?= $p['alamat_tujuan'] ?></td>
                                    <td scope="col"><?= $p['nomor_surat'] ?></td>
                                    <td scope="col"><?= $p['alasan'] ?></td>
                                    <td scope="col"><a href="<?= base_url('Penduduk_pindah/delete/') . $p['id'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('Penduduk_pindah/edit/') . $p['id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>