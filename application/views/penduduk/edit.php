<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Penduduk</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('penduduk/editsave') ?>" method="post">
                        <input type="hidden" class="form-control" value="<?= $result['nik'] ?>" name="niklama">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control" id="nik" value="<?= $result['nik'] ?>" placeholder="Nomor nik" name="nik">
                            <?= form_error('nik', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" value="<?= $result['nama'] ?>" placeholder="nama" name="nama">
                            <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="<?= $result['alamat'] ?>" placeholder="alamat" name="alamat">
                            <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ttl">Tempat lahir</label>
                            <input type="text" class="form-control" id="ttl" value="<?= $result['tempat_lahir'] ?>" placeholder="Tempat lahir" name="ttl">
                            <?= form_error('ttl', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgl" value="<?= $result['tgl_lahir'] ?>" placeholder="Tanggal lahir" name="tgl">
                            <?= form_error('tgl', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option value="<?= $result['agama'] ?>" selected><?= $result['agama'] ?></option>
                                <option value="Islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Protestan">Protestan</option>
                            </select>
                        </div>
                        <?= form_error('agama', '<div class="text-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="status">Status perkawinan</label>
                            <select class="form-control" id="status" name="status">
                                <option value="<?= $result['status_perkawinan'] ?>" selected><?= $result['status_perkawinan'] ?></option>
                                <option value="Menikah">Menikah</option>
                                <option value="Lajang">Lajang</option>
                                <option value="Cerai Hidup">Cerai hidup</option>
                                <option value="Cerai Mati">Cerai mati</option>
                            </select>
                        </div>
                        <?= form_error('status', '<div class="text-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <select class="form-control" id="pekerjaan" name="pekerjaan">
                                <option value="<?= $result['pekerjaan'] ?>" selected><?= $result['pekerjaan'] ?></option>
                                <option value="PNS">PNS</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Buruh">Buruh</option>
                                <!-- Wirausaha’,’Nelayan’,’Petani’,’Pedagang’,’Karyawan’,’Buruh’,’PNS’ -->
                            </select>
                        </div>
                        <?= form_error('pekerjaan', '<div class="text-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select class="form-control" id="pendidikan" name="pendidikan">
                                <option value="<?= $result['pendidikan'] ?>" selected><?= $result['pendidikan'] ?></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/K">SMA/K Sederajat</option>
                                <option value="DI">DI</option>
                                <option value="DII">DII</option>
                                <option value="DVI">DVI</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <!-- SD’,’SMP’,’SMA/K sederajat’,’DI’,’DII’DII’,’DVI’,’S1’,’S2’,’S3 -->
                        </div>
                        <?= form_error('pendidikan', '<div class="text-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="goldarah">Gol darah</label>
                            <select class="form-control" id="goldarah" name="goldarah">
                                <option value="<?= $result['golongan_darah'] ?>" selected><?= $result['golongan_darah'] ?></option>
                                <option value="A">GOL A</option>
                                <option value="B">GOL B</option>
                                <option value="AB">GOL AB</option>
                                <option value="O">GOL O</option>
                            </select>
                            <!-- SD’,’SMP’,’SMA/K sederajat’,’DI’,’DII’DII’,’DVI’,’S1’,’S2’,’S3 -->
                        </div>
                        <?= form_error('goldarah', '<div class="text-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                <option value="<?= $result['jenis_kelamin'] ?>" selected><?= $result['jenis_kelamin'] ?></option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select>
                            <!-- SD’,’SMP’,’SMA/K sederajat’,’DI’,’DII’DII’,’DVI’,’S1’,’S2’,’S3 -->
                        </div>
                        <?= form_error('jeniskelamin', '<div class="text-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="namaayah">Nama ayah</label>
                            <input type="text" class="form-control" id="namaayah" value="<?= $result['nama_ayah'] ?>" placeholder="Nama ayah" name="namaayah">
                            <?= form_error('namaayah', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="namaibu">Nama ibu</label>
                            <input type="text" class="form-control" id="namaibu" value="<?= $result['nama_ibu'] ?>" placeholder="Nama ibu" name="namaibu">
                            <?= form_error('namaibu', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>