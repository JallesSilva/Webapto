<div class="row">
        <div class="col-md-12">
            <br>
            <div class="container">
                <a href="http://<?php echo APP_HOST; ?>/clientes/cadastro/" class="btn btn-info btn-sm">Cadastrar</a>
            </div>
            <br>

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
            <div class="col-md-5">
                <input id="filtro-nome"/>                
            </div>
            <br>
            <br>
                
                <div class="table-responsive">
                    <table id="lista" class="table table-bordered table-hover">

                        <tr style="text-align: center;">
                            <td id="matricula" class="info">Matricula</td>
                            <td id="email" class="info">Email</td>
                            <td id="nome" class="info">Nome</td>
                            <td class="info">Telefone</td>
                            <td class="info">Data Cadastro</td>
                            <td class="info"></td>
                        </tr>
                        <?php
                            foreach($viewVar['listaClientes'] as $clientes) {
                        ?>
                            <tr>
                                <td><?php echo $clientes->getchave_usuario(); ?></td>
                                <td><?php echo $clientes->getemail(); ?></td>
                                <td><?php echo $clientes->getnome(); ?></td>
                                <td><?php echo $clientes->gettelefone(); ?></td>
                                <td><?php echo $clientes->getdatacadastro()->format('d/m/Y'); ?></td>
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/clientes/edicao/<?php echo $clientes->getchave_usuario(); ?>" class="btn btn-info btn-sm">Selecionar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/clientes/exclusao/<?php echo $clientes->getchave_usuario(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>                    
                        <?php
                            }
                        ?>
                    </table>
                    <div class="form-group col-md-9">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $clientes->getemail(); ?>" required>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>