<div class="row" >
		<div class="col-md-2"></div>
	    <div class="col-md-2">
	    	<div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	            	
	            	<li <?php if($viewVar['nameController'] == "UsuarioController" && ($viewVar['nameAction'] == "" || $viewVar['nameAction'] == "index")) { ?> class="active" <?php } ?>>
                    <a class="btn btn-primary" href="http://<?php echo APP_HOST; ?>/usuario" >Lista de Usuários</a>
                	</li>
	                
	            </ul>
            </div>
	    </div>

	    <div class="col-md-2">
	    	<div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	            	
	                <li <?php if($viewVar['nameController'] == "UsuarioController" && $viewVar['nameAction'] == "cadastro") { ?> class="active" <?php } ?>>
	                    <a class="btn btn-primary" href="http://<?php echo APP_HOST; ?>/usuario/cadastro" >Cadastro de Usuários</a>
	                </li>

	            </ul>
            </div>
	    </div>

	    <div class="col-md-2">
	    	<div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	            	
	                <li <?php if($viewVar['nameController'] == "ProdutoController" && ($viewVar['nameAction'] == "" || $viewVar['nameAction'] == "index")) { ?> class="active" <?php } ?>>
                    <a class="btn btn-primary" href="http://<?php echo APP_HOST; ?>/produto1" >Lista de Produtos</a>
                </li>                               

	            </ul>
            </div>
	    </div>

	    <div class="col-md-2">
	    	<div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	            	
	                <li <?php if($viewVar['nameController'] == "ProdutoController" && $viewVar['nameAction'] == "cadastro") { ?> class="active" <?php } ?>>
                    <a class="btn btn-primary" shref="http://<?php echo APP_HOST; ?>/produto/cadastro" >Cadastro de Produto</a>
                	</li> 

	            </ul>
            </div>
	    </div>
    </div>