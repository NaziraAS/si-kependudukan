<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penduduk Datang</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('penduduk_datang') ?>" method="post">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control" id="nik" placeholder="Nomor nik" name="nik">
                            <?= form_error('nik', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal">
                            <?= form_error('nik', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Nama lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" placeholder="Nama lengkap" name="namalengkap">
                            <?= form_error('namalengkap', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="asal">Alamat asal</label>
                            <input type="text" class="form-control" id="asal" placeholder="Alamat asal" name="asal">
                            <?= form_error('asal', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="sosurat">Nomor surat</label>
                            <input type="text" class="form-control" id="nosurat" placeholder="Nomor surat" name="nosurat">
                            <?= form_error('nosurat', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>