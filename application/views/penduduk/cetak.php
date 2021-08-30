<div class="card">
    <div class="card-header text-center">
        <h2>Laporan Data Penduduk</h2>
        <h3>Desa Namlea</h3>
    </div>
    <ul class="list-group">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat lahir</th>
                    <th scope="col">Tgl. lahir</th>
                    <th scope="col">Agama</th>
                    <!-- <th scope="col" colspan="3">Status perkawinan</th> -->
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data as $d) :
                ?>
                    <tr>
                        <td scope="col"><?= $no++; ?></td>
                        <td scope="col"><?= $d['nik'] ?></td>
                        <td scope="col"><?= $d['nama'] ?></td>
                        <td scope="col"><?= $d['alamat'] ?></td>
                        <td scope="col"><?= $d['tempat_lahir'] ?></td>
                        <td scope="col"><?= $d['tgl_lahir'] ?></td>
                        <td scope="col"><?= $d['agama'] ?></td>
                        <td scope="col"><?= $d['pekerjaan'] ?></td>
                        <td scope="col"><?= $d['pendidikan'] ?></td>
                        <td scope="col"><?= $d['golongan_darah'] ?></td>
                        <td scope="col"><?= $d['jenis_kelamin'] ?></td>
                        <td scope="col"><?= $d['nama_ayah'] ?></td>
                        <td scope="col"><?= $d['nama_ibu'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </ul>
</div>

<script>
    window.print();
</script>