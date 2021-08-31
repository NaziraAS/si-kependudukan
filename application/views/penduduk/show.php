<div class="container">
    <div class="flash" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php if ($this->session->flashdata('message')) {
    } ?>

    <div class="row text-center">
        <div class="col-md">
            <h3>Penduduk</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="<?= base_url('penduduk') ?>" id="tambah" class="btn btn-primary">Tambah</a>
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
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th class="col" colspan="2">Kode pos</th>
                                <th scope="col" colspan="2">Tempat lahir</th>
                                <th scope="col" colspan="2">Tgl. lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Status perkawinan</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col" colspan="3">Golongan Darah</th>
                                <th scope="col" colspan="2">Jenis Kelamin</th>
                                <th scope="col" colspan="2">Nama Ayah</th>
                                <th scope="col" colspan="2">Nama Ibu</th>
                                <th scope="col">Opsi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penduduk as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td scope="col"><?= $p['nik'] ?></td>
                                    <td scope="col"><?= $p['nama'] ?></td>
                                    <td scope="col"><?= $p['alamat'] ?></td>
                                    <td scope="col" colspan="2">83522</td>
                                    <td scope="col" colspan="2"><?= $p['tempat_lahir'] ?></td>
                                    <td scope="col" colspan="2"><?= $p['tgl_lahir'] ?></td>
                                    <td scope="col"><?= $p['agama'] ?></td>
                                    <td scope="col" colspan="3"><?= $p['status_perkawinan'] ?></td>
                                    <td scope="col"><?= $p['pekerjaan'] ?></td>
                                    <td scope="col"><?= $p['pendidikan'] ?></td>
                                    <!-- <td scope="col">SMA</td> -->
                                    <td scope="col" colspan="2"><?= $p['jenis_kelamin'] ?></td>
                                    <td scope="col" colspan="2"><?= $p['nama_ayah'] ?></td>
                                    <td scope="col" colspan="2"><?= $p['nama_ibu'] ?></td>
                                    <td scope="col"><a href="<?= base_url('penduduk/delete/') . $p['nik'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a><a href="<?= base_url('penduduk/edit/') . $p['nik'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>