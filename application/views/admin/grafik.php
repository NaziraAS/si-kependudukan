<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
<div class="container">
    <form action="<?= base_url('admin/laporan'); ?>" class="align-left col-lg-4" method="POST">
        <div class="row form-group">
            <div class="col-lg-2">
                <label>Tahun</label>

            </div>
            <div class="col-lg-5">
                <select name="tahun" class="form-control show-tick">
                    <?php
                    $tahun_mulai = 2019;
                    $tahun_sekarang = date("Y");
                    for ($i = $tahun_sekarang; $i >= $tahun_mulai; $i--) {
                    ?>
                        <option value="<?= $i ?>" <?php if ($tahun_sekarang == $i) {
                                                        echo "selected";
                                                    } ?>><?= $i ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">Tampilkan</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <canvas id="myChart" width="50px" height="50px">
                </div>
            </div>
        </div>
    </div>

</div>
</canvas>

<script>
    var kematian = [];
    <?php foreach ($kematian as $k => $value) {
        echo "kematian.push(" . $value . ");";
    }
    ?>

    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [{
                label: 'Kematian',
                data: kematian,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>