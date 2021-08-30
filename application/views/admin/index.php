<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <!-- <div class="col-xl-10 col-lg-12 col-lg-6"> -->

            <div class="card o-hidden border-0 shadow-lg my-5 col-md-6">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Ssitem Informasi<br> Administrasi Kependudukan<br> Desa Namlea</h1>
                                </div>
                                <?= $this->session->flashdata('message') ?>
                                <form class="user" action="<?= base_url('admin') ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" name="username">
                                        <?= form_error('username', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <!-- <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a> -->
                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> -->
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->

            </div>

        </div>

    </div>