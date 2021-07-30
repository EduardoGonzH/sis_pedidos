<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    Mi Dulce Angel | Pedidos
                </title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <!-- Font Awesome -->
                    <link href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
                        <!-- Ionicons -->
                        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
                            <!-- icheck bootstrap -->
                            <link href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css" rel="stylesheet">
                                <!-- Theme style -->
                                <link href="<?php echo base_url(); ?>dist/css/adminlte.min.css" rel="stylesheet">
                                    <!-- Google Font: Source Sans Pro -->
                                    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html">
                    <b>
                        Mi Dulce Ángel
                    </b>
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">
                        Coloca tus credenciales para iniciar sesión
                    </p>
                    <form action="../../index3.html" method="post">
                        <div class="input-group mb-3">
                            <input class="form-control" placeholder="Email" type="email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope">
                                        </span>
                                    </div>
                                </div>
                            </input>
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" placeholder="Contraseña" type="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock">
                                        </span>
                                    </div>
                                </div>
                            </input>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <button class="btn btn-primary btn-block "  type="submit">
                                    Entrar
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mb-1">
                        <a href="<?php echo base_url(); ?>index.php/Login/recuperar_contrasenia">
                            Recuperar mi contraseña
                        </a>
                    </p>
                    <p class="mb-0">
                        <a class="text-center" href="<?php echo base_url(); ?>index.php/Login/registro">
                            Registro nuevo usuario
                        </a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js">
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>/dist/js/adminlte.min.js">
        </script>
    </body>
</html>
