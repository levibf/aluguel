<?= $this->extend('Layout/principal') ?>


<?= $this->section('titulo') ?>
<?= $titulo ?>
<?= $this->endSection() ?>


<?= $this->section('estilos') ?>
    <!-- Coloca conteudo-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css"/>

<?= $this->endSection('estilos') ?>



<?= $this->section('conteudo') ?>

    <div class="row">

        <div class="col-lg-12">
            <div class="block margin-bottom-sm">
                <div class="table-responsive">
                    <table id="ajaxTable" class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Situação</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('conteudo') ?>


<?= $this->section('scripts') ?>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        // Tradução da tabela para PT
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
        //Função para buscar usuarios e configurar o que vai ser mostrado
        $('#ajaxTable').DataTable({
            "oLanguage": DATATABLE_PTBR,
            ajax: '<?= site_url('configurando'); ?>',
            columns: [
                { data: 'imagem' },
                { data: 'nome' },
                { data: 'email' },
                { data: 'ativo' },
            ],
            "deferrender": true,
            "processing": true,
            "language": {
                processing: '<i class="fa far-spinner far-spin fa-3x fa-fw"></i>', //Carregar o loading da tela
            },
            "responsive": true,
            //Configurar resposividade para celular
            "pagingType": $(window).width() < 768 ? "simple" : "simple_numbers",
        });
    });
</script>

<?= $this->endSection('scripts') ?>