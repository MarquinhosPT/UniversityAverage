/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    /*
     |---------------------------------------------------------|
     | INDEX           | index.php                             |
     |---------------------------------------------------------|
     */
    $('#ua-historico-uc').DataTable({
        language: {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        },
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            "url": "http://codeigniter.pmarquinhos.cf/Dashboard/historico",
            "type": "POST"
        },
        "columns": [
            {"data": "ID"},
            {"data": "Codigo"},
            {"data": "Descricao"},
            {"data": "Nota"}
        ], "columnDefs": [
            {
                "targets": [0],
                "visible": true,
                "searchable": false
            }]
    });
    /*
     |---------------------------------------------------------|
     | UNIDADE CURRICULAR | unidadecurricular.php              |
     |---------------------------------------------------------|
     */
    getUnidadeCurricular(1);
    $("#ua-bt-1ano").click(function () {
        getUnidadeCurricular(1);
    });
    $("#ua-bt-2ano").click(function () {
        getUnidadeCurricular(2);
    });
    $("#ua-bt-3ano").click(function () {
        getUnidadeCurricular(3);
    });
    /*
     |---------------------------------------------------------|
     | PROFILE         | profile.php                          |
     |---------------------------------------------------------|
     */
    var fileSelector = $('<input type="file" />');
    $("#profile-foto").click(function () {
        fileSelector.click();
        return false;
    });
    /*
     |---------------------------------------------------------|
     | ALUNO           | gt-aluno.php                          |
     |---------------------------------------------------------|
     */
    /*
     getInstituicao();
     $("#gt-refInstituicao").change(function () {
     getCurso(this.value);
     });
     $("#gt-refCurso").change(function () {
     getAlunos();
     });
     */
});
function getUnidadeCurricular(ano) {

    /* Init DataTables */
    var oTable = $('#uc-table').dataTable({
        language: {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        },
        "processing": true,
        "serverSide": true,
        "destroy": true,
        "paging": false,
        "searching": false,
        "ajax": {
            "data": {
                Ano: ano
            },
            "url": "http://codeigniter.pmarquinhos.cf/UnidadeCurricular/getUnidadeCurricular",
            "type": "POST"
        },
        "columns": [
            {"data": "row_id"},
            {"data": "Codigo"},
            {"data": "Semestre"},
            {"data": "Descricao"},
            {"data": "Nota"}
        ],
        "columnDefs": [
            {targets: [0], visible: true}
        ]
    });

    /* Apply the jEditable handlers to the table */
    oTable.$('td').editable('../examples_support/editable_ajax.php', {
        "callback": function (sValue, y) {
            var aPos = oTable.fnGetPosition(this);
            oTable.fnUpdate(sValue, aPos[0], aPos[1]);
        },
        "submitdata": function (value, settings) {
            return {
                "row_id": this.parentNode.getAttribute('id'),
                "column": oTable.fnGetPosition(this)[2]
            };
        },
        "height": "100%",
        "width": "100%"
    });
}
;
function getInstituicao() {
    $.ajax({
        url: '../API-DB/list/instituicao',
        type: 'GET',
        dataType: "json",
        async: true,
        success: function (data) {
            var options = $("#gt-refInstituicao");
            options.append("<option value=''>Selecionar Instituição</option>");
            $.each(data.Instituicaos, function () {
                options.append("<option value='" + (this.ID) + "'>" + (this.Descricao) + "</option>");
            });
        }
    });
}
;
function getCurso(id) {
    $.ajax({
        url: '../API-DB/list/curso',
        type: 'GET',
        dataType: "json",
        data: {
            ID: id
        },
        async: true,
        success: function (data) {
            var options = $("#gt-refCurso");
            options.append("<option value=''>Selecionar Curso</option>");
            $.each(data.Cursos, function () {
                options.append("<option value='" + (this.ID) + "'>" + (this.Descricao) + "</option>");
            });
        }
    });
}
;
/*
 |---------------------------------------------------------|
 | ALUNO           | aluno.html                            |
 |---------------------------------------------------------|
 */
function getAlunos() {
    $.ajax({
        url: '../API-DB/card/alunos',
        type: 'POST',
        dataType: "json",
        data: {
            refCurso: $("#gt-refCurso").val()
        },
        success: function (data) {
            var card = $("#gt-card-alunos");
            card.empty();
            $.each(data.Alunos, function () {
                card.append('<div class="col-sm-3">\n\
                            <div class="box box-white color-palette-box" id="card-' + this.ID + '">\n\
                            <div class="box-body">\n\
                            <div class="row">\n\
                            <div class="col-sm-12">\n\
                            <p class="text-center">\n\
                            <a href="#">\n\
                            <img alt="imagem" class="img-circle img-responsive" src="' + this.Foto + '">\n\
                            </a>\n\
                            </p>\n\
                            <h4 class="text-capitalize text-bold text-center">' + this.Nome + '</h4>\n\
                            <p class="text-capitalize text-bold text-center">' + this.NumeroMecanografico + '</p>\n\
                            <hr>\n\
                            <p class="text-center">' + this.Media + '</p>\n\
                            </div>\n\
                            </div>\n\
                            </div><!-- /.box-body -->\n\
                            </div>\n\
                            </div>\n\
                            </div>');
            });
        }
    });
}
;