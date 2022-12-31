<?= $this->extend('Layout/principal') ?>


<?= $this->section('titulo') ?>
<?= $titulo ?>
<?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- Coloca conteudo-->

<?= $this->endSection('estilos') ?>


<?= $this->section('conteudo') ?>

<div class="row">

    <div class="col-lg-3">

        <div class="block">

            <div class="text-center">

                <?php if($inquilino->imagem == null):  ?>

                <img src="<?php echo site_url('recursos/img/sem_imagem.png') ?>" class="card-img-top" style="width 50%"
                    alt="Usuário sem imagem">

                <?php else:  ?>

                <img src="<?php echo site_url("usuarios/imagem/$inquilino->imagem") ?>" class="card-img-top"
                    style="width 50%" alt="<?php echo esc($inquilino->nome) ?>">

                <?php endif;  ?>

                <a href="<?php echo site_url("usuario/editarimagem/$inquilino->id")?>"
                    class="btn btn-outline-primary btn-sm mt-3">Alterar Imagem</a>

            </div>

            <hr class="border-secondary">

            <h5 class="card-title mt-2"><?php echo esc($inquilino->nome); ?></h5>
            <h5 class="card-title mt-2"><?php echo esc($inquilino->email); ?></h5>
            <p class="card-text">Criado <?php echo $inquilino->criado_em;?></p>
            <p class="card-text">Atualizado <?php echo $inquilino->atualizado_em;?></p>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item"
                        href="<?php echo site_url("inquilinos/editar/$inquilino->id") ?>">Editar</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"
                        href="<?php echo site_url("inquilinos/excluir/$inquilino->id") ?>">Excluir</a>
                </div>
                <a href="<?php echo site_url('inquilinos')?>" class="btn btn-secondary btn-sm">Voltar</a>
            </div>

        </div>

    </div>

</div>



<?= $this->endSection('conteudo') ?>


<?= $this->section('scripts') ?>

<?= $this->endSection('scripts') ?>