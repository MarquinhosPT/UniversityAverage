<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <a href="<?php echo base_url("Account/profile"); ?>">
                    <img src="<?php echo site_url($foto) ?>" class="img-circle" alt="User Image">
                </a>
            </div>
            <div class="pull-left info">
                <p id="ua-nome"><?php echo $nome ?></p>
                <p id="ua-numeromecanografico"><?php echo $numeromecanografico ?></p>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">TÍTULO</li>
            <li class=""><a href="<?php echo base_url("UnidadeCurricular"); ?>"><i class="fa fa-circle-o text-green"></i> <span>Unidade Curricular</span></a></li>
            <li class="header">GESTÃO</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="<?php echo base_url("Management/Aluno"); ?>"><i class="fa fa-circle-o text-white"></i> <span>Aluno</span></a></li>
            <li class=""><a href="<?php echo base_url("Management/AreaCientifica"); ?>"><i class="fa fa-circle-o text-blue"></i> <span>Área Científica</span></a></li>
            <li class=""><a href="<?php echo base_url("Management/Curso"); ?>"><i class="fa fa-circle-o text-red"></i> <span>Curso</span></a></li>
            <li class=""><a href="<?php echo base_url("Management/Instituicao"); ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Instituição</span></a></li>
            <li class=""><a href="<?php echo base_url("Management/UnidadeCurricular"); ?>"><i class="fa fa-circle-o text-green"></i> <span>Unidade Curricular</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>