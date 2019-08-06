<div class="container">
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

 <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        
        

        <div class="col-md-12">
        

            
            <h3>cadastroro de Usuário</h3>
            
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>


            <form action="http://<?php echo APP_HOST; ?>/clientes/salvar" method="post" id="form_cadastro">

                <div class="form-group col-md-9">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" onchange="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="datacadastro">Data Cadastro</label>
                        <input type="date" class="form-control date" name="datecadastro" placeholder="Data Cadastro" value="<?php echo $Sessao::retornaValorFormulario('datacadastro'); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="datanasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="datanasc" placeholder="Data Nascimento" value="<?php echo $Sessao::retornaValorFormulario('datanasc'); ?>" required>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="anos">Anos</label>
                        <!--<input type="text" class="form-control" name="anos" />-->
                    </div>

                    <div class="form-group col-md-3">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" class="form-control">
                            <option selected value="<?php echo $Sessao::retornaValorFormulario('sexo'); ?>">Masculino</option>
                            <option>Feminina</option>
                      </select>            
                    </div>

                    <div class="form-group col-md-5">
                        <label for="">Estado Civil</label>
                        <input type="text" class="form-control" name="estadocivil" placeholder="Estado Civil" value="<?php echo $Sessao::retornaValorFormulario('estadocivil'); ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="profissao">Profissão</label>
                        <input type="text" class="form-control" name="profissao" placeholder="Profissão" value="<?php echo $Sessao::retornaValorFormulario('profissao'); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="telefone" value="<?php echo $Sessao::retornaValorFormulario('telefone'); ?>" required>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $Sessao::retornaValorFormulario('email'); ?>" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="naturalidade">Naturalidade</label>
                        <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade" value="<?php echo $Sessao::retornaValorFormulario('naturalidade'); ?>" required>
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" placeholder="___.___.___-__" value="<?php echo $Sessao::retornaValorFormulario('cpf'); ?>" required>
                    </div>              

                    <div class="form-group col-md-3">
                        <label for="estado">R.G</label>
                        <input type="text" class="form-control" name="rg" placeholder="R.G" value="<?php echo $Sessao::retornaValorFormulario('rg'); ?>" required>
                    </div>        

                    <div class="form-group col-md-2">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado" placeholder="Estado" value="<?php echo $Sessao::retornaValorFormulario('estado'); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="municipio">Município</label>
                        <input type="text" class="form-control" name="municipio" placeholder="Município" value="<?php echo $Sessao::retornaValorFormulario('municipio'); ?>" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="CEP">CEP</label>
                        <input type="text" class="form-control" name="cep" placeholder="__.___.___" value="<?php echo $Sessao::retornaValorFormulario('cep'); ?>" required>
                    </div>       

                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Endereço" value="<?php echo $Sessao::retornaValorFormulario('endereco'); ?>" required>
                    </div>

                    <div class="form-group col-md-3">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img id="button" src="http://<?php echo APP_HOST; ?>\public\images\next-icon.png"/>Próximo</button>
                    </div>

                    <div class="form-group col-md-3">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img id="button" src="http://<?php echo APP_HOST; ?>\public\images\back-icon.png"/>Voltar</button>
                    </div>

                    <div class="form-group col-md-2">                
                        <button type="submit" class="btn btn-block btn-default btn-lg"><img id="button" src="http://<?php echo APP_HOST; ?>\public\images\mais.png"/>Incluir</button>
                    </div>

                    <div class="form-group col-md-2">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img src="http://<?php echo APP_HOST; ?>\public\images\editar.png"/>Alterar</button>
                    </div>

                    <div class="form-group col-md-2">                
                        <button type="button" class="btn btn-block btn-default btn-lg"><img src="http://<?php echo APP_HOST; ?>\public\images\menos.png"/>Excluir</button>
                    </div>

                <button id="btnSalvar" class="btn btn-success btn-sm" type="submit">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>