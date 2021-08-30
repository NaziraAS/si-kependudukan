<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menikah</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Menikah') ?>" method="post">
                        <!-- <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control nik-input" placeholder="Nik" name="niksuami" autocomplete="off" <?= form_error('niksuami', '<div class="text-danger">', '</div>') ?> </div>
                        </div> -->
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <select class="form-control" id="nik" name="nik" onchange="getNik()">
                                <option selected value="">-Pilih-</option>
                                <?php foreach ($penduduk as $p) : ?>
                                    <option value="<?= $p['nik'] ?>"><?= $p['nik'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control show-nama" id="nama" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tempatmenikah">Tempat menikah</label>
                            <input type="text" class="form-control" id="tempatmenikah" placeholder="Tempat menikah" name="tempatmenikah">
                            <?= form_error('tempatmenikah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggalmenikah">Tanggal menikah</label>
                            <input type="date" class="form-control" id="tanggalmenikah" placeholder="Tanggal menikah" name="tanggalmenikah">
                            <?= form_error('tanggalmenikah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>