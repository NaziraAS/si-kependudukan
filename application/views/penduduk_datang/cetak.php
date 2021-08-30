<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h2>Laporan Data Penduduk Datang</h2>
                <h3>Desa Namlea</h3>
            </div>
            <ul class="list-group">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat asal</th>
                            <th scope="col">Alamat tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d) :
                        ?>
                            <tr>
                                <td scope="col"><?= $no++; ?></td>
                                <td scope="col"><?= $d['nik'] ?></td>
                                <td scope="col"><?= $d['nama'] ?></td>
                                <td scope="col"><?= $d['alamat_asal'] ?></td>
                                <td scope="col"><?= $d['alamat_tujuan'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </ul>
        </div>
    </div>
</div>

<script>
    window.print();
</script>