<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Unidade Curricular
            <small>Optional description</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box box-default color-palette-box">
            <div class="box-body">
                <div class="row margin-bottom">
                    <div class="col-xs-4 col-md-2">
                        <button type="button" class="btn btn-success btn-block btn-flat" id="ua-bt-1ano">1º Ano</button>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <button type="button" class="btn btn-success btn-block btn-flat" id="ua-bt-2ano">2º Ano</button>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <button type="button" class="btn btn-success btn-block btn-flat" id="ua-bt-3ano">3º Ano</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable" id="uc-table" role="grid">
                                        <thead>
                                            <tr>
                                                <th>row_id</th>
                                                <th class="sorting_asc" aria-sort="ascending">Código</th>
                                                <th class="sorting">Semestre</th>
                                                <th class="sorting">Descrição</th>
                                                <th class="sorting">Nota</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>row_id</th>
                                                <th>Código</th>
                                                <th>Semestre</th>
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
            </div>
            <!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div>
<?php
$this->load->view('templates/footer');
