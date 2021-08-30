<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Penduduk Pindah</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Penduduk_pindah/editsave/') . $edit['id'] ?>" method="post">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control" id="nik" value="<?= $edit['nik'] ?>" placeholder="Nomor nik" name="nik">
                            <?= form_error('nik', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Nik</label>
                            <input type="date" class="form-control" id="tanggal" value="<?= $edit['tgl'] ?>" name="tanggal">
                            <?= form_error('tanggal', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Nama lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" value="<?= $edit['nama'] ?>" placeholder="Nama lengkap" name="namalengkap">
                            <?= form_error('namalengkap', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="asal">Alamat asal</label>
                            <input type="text" class="form-control" id="asal" value="<?= $edit['alamat_asal'] ?>" placeholder="Alamat asal" name="asal">
                            <?= form_error('asal', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="asal">Alamat tujuan</label>
                            <input type="text" class="form-control" id="tujuan" value="<?= $edit['alamat_tujuan'] ?>" placeholder="Alamat tujuan" name="tujuan">
                            <?= form_error('tujuan', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nosurat">Nomor surat</label>
                            <input type="text" class="form-control" id="nosurat" value="<?= $edit['nomor_surat'] ?>" name="nosurat">
                            <?= form_error('tujuan', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="alasan">Alasan pindah</label>
                            <textarea class="form-control" id="alasan" rows="3" value="<?= $edit['alasan'] ?>" name="alasan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>