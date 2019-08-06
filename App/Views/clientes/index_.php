
<div class="row">
        <div class="col-md-12">
            <br>
            <div class="container">
                <a href="http://<?php echo APP_HOST; ?>/clientes/cadastro/" class="btn btn-info btn-sm">Cadastrar</a>
            </div>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $Sessao::retornaMensagem(); ?>
                </div>
            <?php } ?>

            <?php
                if(!count($viewVar['listaClientes'])){
            ?>
                <div class="alert alert-info" role="alert">Nenhum cliente encontrado</div>
            <?php
                } else {
            ?>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">

                        <tr style="text-align: center;">
                            <td class="info">Email</td>
                            <td class="info">Nome</td>
                            <td class="info">Telefone</td>
                            <td class="info">Data Cadastro</td>
                            <td class="info"></td>
                        </tr>
                        <?php
                            foreach($viewVar['listaClientes'] as $clientes) {
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $clientes->getemail(); ?></td>
                                <td><?php echo $clientes->getnome(); ?></td>
                                <td><?php echo $clientes->gettelefone(); ?></td>
                                <td><?php echo $clientes->getdatacadastro()->format('d/m/Y'); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/clientes/edicao/<?php echo $clientes->getchave_usuario(); ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/clientes/exclusao/<?php echo $clientes->getchave_usuario(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            <?php
                }
            ?>
        </div>
    </div>