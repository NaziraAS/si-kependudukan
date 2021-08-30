<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit kematian</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('kematian/editsave/') . $edit['id_kematian'] ?>" method="post">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control" id="nik" value="<?= $edit['nik'] ?>" placeholder="Nik" name="nik">
                            <?= form_error('nik', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" class="form-control" id="hari" value="<?= $edit['hari'] ?>" placeholder="hari" name="hari">
                            <?= form_error('hari', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" value="<?= $edit['tgl_kematian'] ?>" placeholder="tgl" name="tgl">
                            <?= form_error('tgl', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" class="form-control" id="jam" value="<?= $edit['jam'] ?>" placeholder="Jam" name="jam">
                            <?= form_error('jam', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tempatkematian">Tempat kematian</label>
                            <input type="text" class="form-control" id="tempatkematian" value="<?= $edit['tempat_kematian'] ?>" placeholder="Tempat kematian" name="tempatkematian">
                            <?= form_error('tempatkematian', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="anakke">Anak ke</label>
                            <input type="text" class="form-control" id="anakke" value="<?= $edit['anak_ke'] ?>" placeholder="anak ke" name="anakke">
                            <?= form_error('anakke', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="sebabkematian">Sebab kematian</label>
                            <input type="text" class="form-control" id="sebabkematian" value="<?= $edit['sebab_kematian'] ?>" placeholder="Sebab kematian" name="sebabkematian">
                            <?= form_error('sebabkematian', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nikibu">Nik ibu</label>
                            <input type="text" class="form-control" id="nikibu" value="<?= $edit['nik_ibu'] ?>" placeholder="Nik ibu" name="nikibu">
                            <?= form_error('nikibu', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nikayah">Nik ayah</label>
                            <input type="text" class="form-control" id="nikayah" value="<?= $edit['nik_ayah'] ?>" placeholder="Nik ayah" name="nikayah">
                            <?= form_error('nikayah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="niksaksi">Nik saksi</label>
                            <input type="text" class="form-control" id="niksaksi" value="<?= $edit['nik_saksi'] ?>" placeholder="Nik saksi" name="niksaksi">
                            <?= form_error('niksaksi', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nikpelapor">Nik pelapor</label>
                            <input type="text" class="form-control" id="nikpelapor" value="<?= $edit['nik_pelapor'] ?>" placeholder="Nik pelapor" name="nikpelapor">
                            <?= form_error('nikpelapor', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>