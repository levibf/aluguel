<?= $this->extend('Layout/principal') ?>


<?= $this->section('titulo') ?>
<?= $titulo ?>
<?= $this->endSection() ?>


<?= $this->section('estilos') ?>
    <!-- Coloca conteudo-->

<?= $this->endSection('estilos') ?>



<?= $this->section('conteudo') ?>
<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo site_url('inquilinos/cadastrar')?>">Cadastrar</a>
    </div>
</div>
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
        //Função para buscar usuarios e configurar o que vai ser mostrado
        $('#ajaxTable').DataTable({
            "oLanguage": DATATABLE_PTBR,
            ajax: '<?= site_url('inquilinos/recuperainquilinos'); ?>',
            columns: [
                { data: 'nome' },
                { data: 'email' },
                { data: 'ativo' },
            ],
            "deferrender": true,
            "processing": true,
            "language": {
                // o loading da tabela
            },
            "responsive": true,
            //Configurar resposividade para celular
            "pagingType": $(window).width() < 768 ? "simple" : "simple_numbers",
        });
    });
</script>

<?= $this->endSection('scripts') ?>