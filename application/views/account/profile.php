<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Perfil
            <small>Optional description</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="row">
            <div class="col-md-4">
                <div class="box box-default color-palette-box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <img class="profile-user-img img-responsive img-circle" src="<?php echo site_url($foto); ?>" id="profile-foto" />
                                <h3 class="profile-username text-center"><?php echo $nome ?></h3>
                                <p class="text-muted text-center"><?php echo $curso ?></p>
                            </div>
                        </div>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Média</b> <a class="pull-right">XX</a>
                            </li>
                            <li class="list-group-item">
                                <b>Unidades Curriculares</b> <a class="pull-right">X de X</a>
                            </li>
                            <li class="list-group-item">
                                <b>ECTS</b> <a class="pull-right">X de X</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h2 class="box-title">Informação Conta</h2>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="E-mail" disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" placeholder="Palavra-passe antiga">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" placeholder="Nova Palavra-passe">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h2 class="box-title">Informação Pessoal</h2>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Número Mecanográfico" disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Data de Nascimento">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Contacto">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>

</section>
</div>
<?php
$this->load->view('templates/footer');
