<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelahiran</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('kelahiran') ?>" method="post">
                        <div class="form-group">
                            <label for="namabayi">Nama bayi</label>
                            <input type="text" class="form-control" id="namabayi" placeholder="Nama bayi" name="namabayi">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat lahir</label>
                            <input type="text" class="form-control" id="tempat" placeholder="tempat" name="tempat">
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tgl" placeholder="tgl" name="tgl">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                <option selected>-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam" placeholder="Jam" name="jam">
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="text" class="form-control" id="berat" placeholder="Berat" name="berat">
                        </div>
                        <div class="form-group">
                            <label for="panjang">Panjang</label>
                            <input type="text" class="form-control" id="panjang" placeholder="Panjang" name="panjang">
                        </div>
                        <div class="form-group">
                            <label for="ttd">Tempat di lahirkan</label>
                            <select class="form-control" id="ttd" name="ttd">
                                <option selected>-- Pilih --</option>
                                <option value="RS">Rumah sakit</option>
                                <option value="Rumah">Rumah</option>
                                <option value="Puskesmas">Puskesmas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelahiranke">Kelahiran ke</label>
                            <input type="text" class="form-control" id="kelahiranke" placeholder="Kelahiran ke" name="kelahiranke">
                        </div>
                        <div class=" form-group">
                            <label for="nikibu">Nik ibu</label>
                            <input type="text" class="form-control" id="nikibu" name="nikibu" autocomplete="off">
                            <ul class="list-group" id="resultibu"></ul>
                        </div>
                        <div class=" form-group">
                            <label for="nikibu">Nama</label>
                            <input type="text" class="form-control" id="ibu" disabled autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="nikayah">Nik ayah</label>
                            <input type="text" class="form-control" id="nikayah" autocomplete="off" name="nikayah">
                            <ul class="list-group" id="resultayah"></ul>
                        </div>
                        <div class=" form-group">
                            <label for="ayah">Nama</label>
                            <input type="text" class="form-control" id="ayah" disabled autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="nikpelapor">Nik pelapor</label>
                            <input type="text" class="form-control" id="nikpelapor" placeholder="Nik pelapor" name="nikpelapor">
                            <ul class="list-group" id="resultpelapor"></ul>
                        </div>
                        <div class=" form-group">
                            <label for="pelapor">Pelapor</label>
                            <input type="text" class="form-control" id="pelapor" disabled autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>