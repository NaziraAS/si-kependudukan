<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kematian</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('kematian') ?>" method="post">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control" id="nik" placeholder="Nik" name="nik" autocomplete="off">
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
                                <option selected>-- PILIH --</option>
                                <option value="Senin">Senin</option>
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
                            <input type="date" class="form-control" id="tgl" placeholder="tgl" max="<?= date('Y-m-d') ?>" name="tgl">
                            <?= form_error('tgl', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" placeholder="Jam" name="jam">
                            <?= form_error('jam', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tempatkematian">Tempat kematian</label>
                            <input type="text" class="form-control" id="tempatkematian" placeholder="Tempat kematian" name="tempatkematian">
                            <?= form_error('tempatkematian', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Umur</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="umur">
                                <option selected>-- Pilih --</option>
                                <?php for ($i = 0; $i <= 70; $i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sebab kematian</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="sebabkematian">
                                <option selected>-- Pilih --</option>
                                <option value="Sakit Biasa/Tua">Sakit Biasa/Tua</option>
                                <option value="Wabah penyakit">Wabah penyakit</option>
                                <option value="Kecelakaan">Kecelakaan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nikibu">Nik ibu</label>
                            <input type="text" class="form-control" id="nikibu" autocomplete="off" name="nikibu">
                            <ul class="list-group" id="resultibu"></ul>
                            <?= form_error('nikibu', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ibu">Nama ibu</label>
                            <input type="text" class="form-control" id="ibu" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nikayah">Nik ayah</label>
                            <input type="text" class="form-control" id="nikayah" autocomplete="off" name="nikayah">
                            <ul class="list-group" id="resultayah"></ul>
                            <?= form_error('nikayah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ayah">Nama ayah</label>
                            <input type="text" class="form-control" id="ayah" disabled>
                        </div>
                        <div class="form-group">
                            <label for="niksaksi">Nik saksi</label>
                            <input type="text" class="form-control" id="niksaksi" autocomplete="off" name="niksaksi">
                            <ul class="list-group" id="resultsaksi"></ul>
                            <?= form_error('niksaksi', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="saksi">Nama saksi</label>
                            <input type="text" class="form-control" id="saksi" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nikpelapor">Nik pelapor</label>
                            <input type="text" class="form-control" id="nikpelapor" autocomplete="off" name="nikpelapor">
                            <ul class="list-group" id="resultpelapor"></ul>
                            <?= form_error('nikpelapor', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="pelapor">Nama pelapor</label>
                            <input type="text" class="form-control" id="pelapor" disabled>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>