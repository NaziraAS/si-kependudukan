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
                            <input type="text" class="form-control" id="nik" value="<?= $edit['nik'] ?>" name="nik" autocomplete="off">
                            <ul class="list-group" id="resultnik"></ul>
                            <?= form_error('nik', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" disabled>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select class="form-control" id="hari" name="hari">
                                <option value="<?= $edit['hari'] ?>" selected><?= $edit['hari'] ?></option>
                                <!-- <option value="Senin">Senin</option> -->
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" value="<?= $edit['tgl_kematian'] ?>" placeholder=" tgl" max="<?= date('Y-m-d') ?>" name="tgl">
                            <?= form_error('tgl', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" value="<?= $edit['jam'] ?>" placeholder="Jam" name="jam">
                            <?= form_error('jam', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tempatkematian">Tempat kematian</label>
                            <input type="text" class="form-control" id="tempatkematian" value="<?= $edit['tempat_kematian'] ?>" placeholder="Tempat kematian" name="tempatkematian">
                            <?= form_error('tempatkematian', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Umur</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="umur">
                                <option value="<?= $edit['umur'] ?>" selected><?= $edit['umur'] ?></option>
                                <?php for ($i = 0; $i <= 70; $i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sebab kematian</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="sebabkematian">
                                <option value="<?= $edit['sebab_kematian'] ?>" selected><?= $edit['sebab_kematian'] ?></option>
                                <option value="Sakit Biasa/Tua">Sakit Biasa/Tua</option>
                                <option value="Wabah penyakit">Wabah penyakit</option>
                                <option value="Kecelakaan">Kecelakaan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_kematian">Status</label>
                            <select class="form-control" id="status_kematian" name="status_kematian">
                                <option value="<?= $edit['status'] ?>" selected><?= $edit['status'] ?></option>
                                <option value="Meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nikibu">Nik ibu</label>
                            <input type="text" class="form-control" id="nikibu" value="<?= $edit['nik_ibu'] ?>" autocomplete="off" name="nikibu">
                            <ul class="list-group" id="resultibu"></ul>
                            <?= form_error('nikibu', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ibu">Nama ibu</label>
                            <input type="text" class="form-control" id="ibu" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nikayah">Nik ayah</label>
                            <input type="text" class="form-control" id="nikayah" value="<?= $edit['nik_ayah'] ?>" autocomplete="off" name="nikayah">
                            <ul class="list-group" id="resultayah"></ul>
                            <?= form_error('nikayah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ayah">Nama ayah</label>
                            <input type="text" class="form-control" id="ayah" disabled>
                        </div>
                        <div class="form-group">
                            <label for="niksaksi">Nik saksi</label>
                            <input type="text" class="form-control" id="niksaksi" value="<?= $edit['nik_saksi'] ?>" autocomplete="off" name="niksaksi">
                            <ul class="list-group" id="resultsaksi"></ul>
                            <?= form_error('niksaksi', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="saksi">Nama saksi</label>
                            <input type="text" class="form-control" id="saksi" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nikpelapor">Nik pelapor</label>
                            <input type="text" class="form-control" id="nikpelapor" value="<?= $edit['nik_pelapor'] ?>" autocomplete="off" name="nikpelapor">
                            <ul class="list-group" id="resultpelapor"></ul>
                            <?= form_error('nikpelapor', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="pelapor">Nama pelapor</label>
                            <input type="text" class="form-control" id="pelapor" disabled>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>