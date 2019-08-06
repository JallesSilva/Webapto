<div class="container">
    <div class="row">

            <div class="container" >
                <div class="row">            
                    <div class="button">
                        <tr>
                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/clientes/cadastro" class="btn btn-success btn-sm">Adicionar</a>            
                            </td>
                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/clientes" class="btn btn-info btn-sm">Voltar</a>            
                            </td>
                        </tr>
                    </div>
                </div>
            </div>

            <h3>Editar Usúario</h3>

                <?php if($Sessao::retornaErro()){ ?>
                    <div class="alert alert-warning" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                            <?php echo $mensagem; ?> <br>
                        <?php } ?>
                    </div>
                <?php } ?>

        <div class="col-md-12">
        <br>

            <form action="http://<?php echo APP_HOST; ?>/clientes/atualizar" method="post" id="form_cadastro">
                
                <input type="hidden" class="form-control" name="chave_usuario" id="chave_usuario" value="<?php echo $viewVar['cliente']->getchave_usuario(); ?>">
        
                    <div class="form-group col-md-9">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $viewVar['cliente']->getnome(); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="datacadastro">Data Cadastro</label>
                        <input type="date" class="form-control date" name="datecadastro" placeholder="Data Cadastro" value="<?php echo $viewVar['cliente']->getdatacadastro()->format('Y-m-d'); ?>"  required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="datanasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="datanasc" placeholder="Data Nascimento" value="<?php echo $viewVar['cliente']->getdatanasc()->format('Y-m-d'); ?>"  required>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="anos">Anos</label>
                        <!--<input type="text" class="form-control" name="anos" />-->
                    </div>

                    <div class="form-group col-md-3">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" id="nome" name="sexo" placeholder="Sexo" value="<?php echo $viewVar['cliente']->getsexo(); ?>" required>                           
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Estado Civil</label>
                        <input type="text" class="form-control" name="estadocivil" placeholder="Estado Civil" value="<?php echo $viewVar['cliente']->getestadocivil(); ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="profissao">Profissão</label>
                        <input type="text" class="form-control" name="profissao" placeholder="Profissão" value="<?php echo $viewVar['cliente']->getprofissao(); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="telefone" value="<?php echo $viewVar['cliente']->gettelefone(); ?>" required>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $viewVar['cliente']->getemail(); ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="naturalidade">Naturalidade</label>
                        <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade" value="<?php echo $viewVar['cliente']->getnaturalidade(); ?>" required>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" placeholder="___.___.___-__" value="<?php echo $viewVar['cliente']->getcpf(); ?>" required>
                    </div>              

                    <div class="form-group col-md-3">
                        <label for="estado">R.G</label>
                        <input type="text" class="form-control" name="rg" placeholder="R.G" value="<?php echo $viewVar['cliente']->getrg(); ?>" required>
                    </div>        

                    <div class="form-group col-md-2">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" placeholder="Estado" value="<?php echo $viewVar['cliente']->getestado(); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="municipio">Município</label>
                        <input type="text" class="form-control" name="municipio" placeholder="Município" value="<?php echo $viewVar['cliente']->getmunicipio(); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="CEP">CEP</label>
                        <input type="text" class="form-control" name="cep" placeholder="__.___.___" value="<?php echo $viewVar['cliente']->getcep(); ?>" required>
                    </div>       

                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="<?php echo $viewVar['cliente']->getendereco(); ?>" required>
                    </div>

                    <div class="form-group col-md-3">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img id="button" src="http://<?php echo APP_HOST; ?>\public\images\back-icon.png"/> Voltar</button>
                    </div>

                    <div class="form-group col-md-3">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img id="button" src="http://<?php echo APP_HOST; ?>\public\images\next-icon.png"/> Próximo</button>
                    </div>                   

                    <div class="form-group col-md-2">                
                        <button type="btn-success" class="btn btn-block btn-default btn-lg">
                            <img id="button" src="http://<?php echo APP_HOST; ?>\public\images\mais.png"/>
                            <a href="http://<?php echo APP_HOST; ?>/clientes/cadastro"></a> Incluir</button>
                    </div>

                    <div class="form-group col-md-2">                
                        <button type="submit" class="btn btn-block btn-default btn-lg">
                            <img src="http://<?php echo APP_HOST; ?>\public\images\editar.png"/> Salvar</button>
                    </div>

                    <div class="form-group col-md-2">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img src="http://<?php echo APP_HOST; ?>\public\images\menos.png"/> Excluir</button>
                    </div>

            </div>
        </form>            
        </div> 
        </div> 
    </div>
</div>
<button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="http://<?php echo APP_HOST; ?>/clientes" class="btn btn-info btn-sm">Voltar</a>