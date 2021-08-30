<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit kelahiran</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('kelahiran/editsave/') . $edit['id_kelahiran'] ?>" method="post">
                        <div class="form-group">
                            <label for="namabayi">Nama bayi</label>
                            <input type="text" class="form-control" id="namabayi" value="<?= $edit['nama_bayi'] ?>" placeholder="Nama bayi" name="namabayi">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat lahir</label>
                            <input type="text" class="form-control" id="tempat" value="<?= $edit['tempat_lahir'] ?>" placeholder="tempat" name="tempat">
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgl" value="<?= $edit['tgl_lahir'] ?>" placeholder="tgl" name="tgl">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                <option value="<?= $edit['jenis_kelamin'] ?>" selected><?= $edit['jenis_kelamin'] ?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" class="form-control" id="jam" value="<?= $edit['jam'] ?>" placeholder="Jam" name="jam">
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="text" class="form-control" id="berat" value="<?= $edit['berat'] ?>" placeholder="Berat" name="berat">
                        </div>
                        <div class="form-group">
                            <label for="panjang">Panjang</label>
                            <input type="text" class="form-control" id="panjang" value="<?= $edit['panjang'] ?>" placeholder="Panjang" name="panjang">
                        </div>
                        <div class="form-group">
                            <label for="ttd">Tempat di lahirkan</label>
                            <select class="form-control" id="ttd" name="ttd">
                                <option value="<?= $edit['tempat_dilahirkan'] ?>" selected>value="<?= $edit['tempat_dilahirkan'] ?>"</option>
                                <option value="RS">Rumah sakit</option>
                                <option value="Rumah">Rumah</option>
                                <option value="Puskesmas">Puskesmas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelahiranke">Kelahiran ke</label>
                            <input type="text" class="form-control" id="kelahiranke" value="<?= $edit['kelahiran_ke'] ?>" placeholder="Kelahiran ke" name="kelahiranke">
                        </div>
                        <div class="form-group">
                            <label for="nikibu">Nik ibu</label>
                            <input type="text" class="form-control" id="nikibu" value="<?= $edit['nik_ibu'] ?>" placeholder="Nik ibu" name="nikibu">
                        </div>
                        <div class="form-group">
                            <label for="nikayah">Nik ayah</label>
                            <input type="text" class="form-control" id="nikayah" value="<?= $edit['nik_ayah'] ?>" placeholder="Nik ayah" name="nikayah">
                        </div>
                        <div class="form-group">
                            <label for="nikpelapor">Nik pelapor</label>
                            <input type="text" class="form-control" id="nikpelapor" value="<?= $edit['nik_pelapor'] ?>" placeholder="Nik pelapor" name="nikpelapor">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>