<?= $this->extend('Layout/principal') ?>


<?= $this->section('titulo') ?>
<?= $titulo ?>
<?= $this->endSection() ?>


<?= $this->section('estilos') ?>
    <!-- Coloca conteudo-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/r-2.4.0/datatables.min.css"/>
<?= $this->endSection('estilos') ?>



<?= $this->section('conteudo') ?>

    <div class="row">

        <div class="col-lg-12">
            <div class="block margin-bottom-sm">
                <div class="table-responsive">
                    <table id="ajaxTable" class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Situação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('conteudo') ?>


<?= $this->section('scripts') ?>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/r-2.4.0/datatables.min.js"></script>

<script>
    $(document).ready(function () {

        const DATATABLE_PTBR = {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }


    $('#ajaxTable').DataTable({

        "oLanguage": DATATABLE_PTBR,

        ajax: '<?php echo site_url('inquilinos/recuperainquilinos')?>',
        columns: [
            { data: 'nome' },
            { data: 'email' },
            { data: 'ativo' },
        ],
        "deferRender": true,
        "processing": true,
    });
});
</script>

<?= $this->endSection('scripts') ?>