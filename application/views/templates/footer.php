            <!-- Footer -->
            <footer class="sticky-footer text-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('Admin/logout') ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url() ?>vendor/sbadmin/vendor/jquery/jquery.js"></script>
            <script src="<?= base_url('vendor/sbadmin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- chart area -->
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script> -->
            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('vendor/sbadmin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('vendor/sbadmin/') ?>js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?= base_url('vendor/sbadmin/') ?>vendor/chart.js/Chart.js"></script>
            <!-- <script src="<?= base_url('vendor/sbadmin/') ?>vendor/chart.js/Chart.min.js"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"> </script>
            <!-- Page level custom scripts -->
            <script src="<?= base_url('vendor/sbadmin/') ?>js/demo/chart-area-demo.js"></script>
            <script src="<?= base_url('vendor/sbadmin/') ?>js/demo/chart-pie-demo.js"></script>
            <script src="<?= base_url('vendor/sw/sweetalert2.all.js') ?>"></script>
            <script src="<?= base_url('vendor/sbadmin/js/script.js') ?>"></script>
            <script>
                let base_url = 'http://localhost/si-kependudukan/';
                $(document).ready(function() {
                    function getNik() {
                        let nik = document.getElementById('nik').value;
                        $.ajax({
                            url: base_url + 'getNameByNik',
                            data: {
                                nik
                            },
                            type: 'GET',
                            dataType: 'JSON',
                            success: function(data) {
                                if (nik == '') {
                                    $('#nama').val('')
                                } else {
                                    $('#nama').val(data.nama)
                                }
                            }
                        })
                    }
                    // get nama ibu di kelahiran
                    $('#nikibu').on('keyup', function() {
                        var nik = $('#nikibu').val();
                        if (nik.length == 0) {
                            $('#resultlist').hide();
                            $('#ibu').val('');
                        } else if (nik.length > 0) {
                            $('#resultlist').show();
                            $.ajax({
                                url: base_url + 'kelahiran/getNamaIbuByNik',
                                type: 'POST',
                                data: {
                                    nik
                                },
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultibu').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#ibu').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultibu').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();

                        $('#nikibu').val(nama);
                        $("#resultibu").html('');
                    });
                    // akhir get nama ibu ibu kelahiran
                    // get nama ayah di kelahiran
                    $('#nikayah').on('keyup', function() {
                        var nik = $('#nikayah').val();
                        if (nik.length == 0) {
                            $('#resultlist').hide();
                            $('#ayah').val('');
                        } else if (nik.length > 0) {
                            $('#resultlist').show();
                            $.ajax({
                                url: base_url + 'kelahiran/getNamaAyahByNik',
                                type: 'POST',
                                data: {
                                    nik
                                },
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultayah').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#ayah').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultayah').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();

                        $('#nikayah').val(nama);
                        $("#resultayah").html('');
                    });
                    // akhir get nama ayah kelahiran
                    // get nama pelapor di kelahiran
                    $('#nikpelapor').on('keyup', function() {
                        var nik = $('#nikpelapor').val();
                        if (nik.length == 0) {
                            $('#resultpelapor').hide();
                            $('#pelapor').val('');
                        } else if (nik.length > 0) {
                            $('#resultpelapor').show();
                            $.ajax({
                                url: base_url + 'kelahiran/getNamaPelaporByNik',
                                type: 'POST',
                                data: {
                                    nik
                                },
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultpelapor').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#pelapor').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultpelapor').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();

                        $('#nikpelapor').val(nama);
                        $("#resultpelapor").html('');
                    });
                    // akhir get nama pelapor kelahiran
                    // get nama by nik kematian
                    $('#nik').on('keyup', function() {
                        var nik = $('#nik').val();
                        if (nik.length == 0) {
                            $('#resultnik').hide();
                            $('#nama').val('');
                        } else if (nik.length > 0) {
                            $('#resultnik').show();
                            $.ajax({
                                url: base_url + 'kematian/getNamaByNik',
                                data: {
                                    nik
                                },
                                type: 'POST',
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultnik').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#nama').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultnik').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();
                        $('#nik').val(nama);
                        $("#resultnik").html('');
                    });
                    // akhir get nama by nik -> kematian
                    // get nama ibu by nik kematian
                    $('#nikibu').on('keyup', function() {
                        var nik = $('#nikibu').val();
                        if (nik.length == 0) {
                            $('#resultibu').hide();
                            $('#ibu').val('');
                        } else if (nik.length > 0) {
                            $('#resultibu').show();
                            $.ajax({
                                url: base_url + 'kematian/getNamaByNik',
                                data: {
                                    nik
                                },
                                type: 'POST',
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultibu').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#ibu').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultibu').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();
                        $('#nikibu').val(nama);
                        $("#resultibu").html('');
                    });
                    // akhir get nama ibu by nik kematian
                    // get nama ayah by nik kematian
                    $('#nikayah').on('keyup', function() {
                        var nik = $('#nikayah').val();
                        if (nik.length == 0) {
                            $('#resultayah').hide();
                            $('#ayah').val('');
                        } else if (nik.length > 0) {
                            $('#resultayah').show();
                            $.ajax({
                                url: base_url + 'kematian/getNamaByNik',
                                data: {
                                    nik
                                },
                                type: 'POST',
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultayah').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#ayah').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultayah').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();
                        $('#nikayah').val(nama);
                        $("#resultayah").html('');
                    });
                    // akhir get nama ayah by nik kematian
                    // get nama saksi by nik kematian
                    $('#niksaksi').on('keyup', function() {
                        var nik = $('#niksaksi').val();
                        if (nik.length == 0) {
                            $('#resultsaksi').hide();
                            $('#saksi').val('');
                        } else if (nik.length > 0) {
                            $('#resultsaksi').show();
                            $.ajax({
                                url: base_url + 'kematian/getNamaByNik',
                                data: {
                                    nik
                                },
                                type: 'POST',
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultsaksi').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#saksi').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultsaksi').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();
                        $('#niksaksi').val(nama);
                        $("#resultsaksi").html('');
                    });
                    // akhir get nama saksi by nik kematian
                    // get nama pelapor by nik kematian
                    $('#nikpelapor').on('keyup', function() {
                        var nik = $('#nikpelapor').val();
                        if (nik.length == 0) {
                            $('#resultpelapor').hide();
                            $('#pelapor').val('');
                        } else if (nik.length > 0) {
                            $('#resultpelapor').show();
                            $.ajax({
                                url: base_url + 'kematian/getNamaByNik',
                                data: {
                                    nik
                                },
                                type: 'POST',
                                dataType: 'JSON',
                                success: function(data) {
                                    $.each(data, function(i, d) {
                                        $('#resultpelapor').append(`<li class="list-group-item link-class position-absolute"><span class="hasil">${d.nik}</span></li>`);
                                        $('#pelapor').val(d.nama);
                                    });
                                }
                            })
                        }
                    });
                    $('#resultpelapor').on('click', 'li', function() {
                        let nama = $(this).children('.hasil').text();
                        $('#nikpelapor').val(nama);
                        $("#resultpelapor").html('');
                    });
                    // akhir get pelapor by nik kematian
                })
            </script>

            </body>

            </html>