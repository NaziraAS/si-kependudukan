<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kepala desa</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('kepala_desa/editsave/') . $edit['id_kepala_desa'] ?>" method="post">
                        <div class="form-group">
                            <label for="nip">Nip</label>
                            <input type="text" class="form-control" id="nip" value="<?= $edit['nip'] ?>" placeholder="Nip" name="nip">
                            <?= form_error('nip', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="namakades">Nama kepala desa</label>
                            <input type="text" class="form-control" id="namakades" value="<?= $edit['nama'] ?>" placeholder="Nama kepala desa" name="namakades">
                            <?= form_error('namakades', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="<?= $edit['status'] ?>" selected><?= $edit['status'] ?></option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>