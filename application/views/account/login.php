<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Login - UniversityAverage</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"></meta>

        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="../assets/plugins/hovercss/hover.css"></link>
    </head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic);
        body {
            margin: 0;
            padding: 0;
            //background-color: #d2d6de;
            background: url('../assets/img/bg-login-xs.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-size: cover;

            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 400;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .login-box {
            width: 360px;
            margin: 7% auto;
        }
        .login-box-body {
            background: rgba(255,255,255,0.7);
            padding: 20px;
            border-top: 0;
            color: #666;
        }
        .login-logo {
            font-size: 35px;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 300;
        }
        .form-control {
            border-radius: 0;
            box-shadow: none;
            border-color: #d2d6de;
        }
        .btn.btn-flat {
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-width: 1px;
        }
        .btn-primary {
            background-color: #3c8dbc;
            border-color: #367fa9;
        }
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary.hover {
            background-color: #367fa9;
        }
    </style>
    <body>
        <!--<div class="bg"></div>-->
        <div class="login-box">
            <div class="login-box-body">
                <div class="login-logo">
                    <b>University</b>Average
                </div><!-- /.login-logo -->
                <!--
                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Iniciar sessão com Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Iniciar sessão com Google+</a>
                </div><!-- /.social-auth-links 
                <hr>-->
                <?php echo validation_errors(); ?>
                <?php echo form_open('Account/verifylogin'); ?>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="E-mail" name="Email" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Palavra-passe" name="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat hvr-sweep-to-top">Iniciar Sessão</button>
                    </div><!-- /.col -->
                </div>
                </form>
                <a href="<?php echo base_url("#"); ?>">Esqueci-me da minha palavra-passe</a><br>
                    Não tem conta? <a href="<?php echo base_url("Account/register"); ?>" class="text-center">Inscrever-se</a>

            </div><!-- /.login-box-body -->
        </div>
        <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>