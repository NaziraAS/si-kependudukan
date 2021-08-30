<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit menikah</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Menikah/editsave/') . $edit['id_menikah'] ?>" method="post">
                        <div class="form-group">
                            <label for="niiksuami">Nik</label>
                            <input type="text" class="form-control" id="niksuami" value="<?= $edit['nik_penduduk'] ?>" placeholder="Nik suami" name="niksuami" disabled>
                            <?= form_error('niksuami', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tempatmenikah">Tempat menikah</label>
                            <input type="text" class="form-control" id="tempatmenikah" value="<?= $edit['tempat_menikah'] ?>" placeholder="Tempat menikah" name="tempatmenikah">
                            <?= form_error('tempatmenikah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggalmenikah">Tanggal menikah</label>
                            <input type="date" class="form-control" id="tanggalmenikah" value="<?= $edit['tgl_pernikahan'] ?>" placeholder="Tanggal menikah" name="tanggalmenikah">
                            <?= form_error('tanggalmenikah', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>