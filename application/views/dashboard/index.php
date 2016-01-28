<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Histórico das notas
            <small>Optional description</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-default color-palette-box">
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable" id="ua-historico-uc" role="grid">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th class="sorting_asc" aria-sort="ascending">Código</th>
                                                <th class="sorting">Descrição</th>
                                                <th class="sorting">Nota</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Código</th>
                                                <th>Descrição</th>
                                                <th>Nota</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-12 col-md-offset-5">
                        <div class="info-box">
                            <span class="info-box-icon bg-gray" id="info-box-icon-media">
                                <span class="info-box-number">XX,xx</span>
                            </span>
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div>
<?php
$this->load->view('templates/footer');
