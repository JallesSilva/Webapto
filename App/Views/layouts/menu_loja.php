<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand" style="padding-top:15px" href="index.php">WebApto</a>
            </div>

            <!--nav-collapse -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>                        
                        <ul class="dropdown-menu">
                            <li>
                                <a href="http://<?php echo APP_HOST; ?>/produto/">Lista Produtos</a>
                            </li>
                            <li>
                                <a href="http://<?php echo APP_HOST; ?>/produto/adicionar">Adicionar Produto</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="carrinho">Carrinho</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://<?php echo APP_HOST; ?>/cliente">Gerenciar clientes</a></li>
                            <li><a href="http://<?php echo APP_HOST; ?>/cliente/adicionar">Adicionar Cliente</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financeiro <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro_boleto.php">Cadastrar boleto</a></li>
                            <li><a href="financeiro/index.php">Gerenciar boleto</a></li>
                            <li><a href="relatorio_compras.php">Cadastrar nota compra</a></li>
                            <li><a href="relatorio.php">Relatório Semanal</a></li>
                        </ul>
                    </li>
                    <li><a href="orcamento_gerenciar.php">Orçamentos</a></li>
                    <li><a href="relatorio_vendas.php">Relatório Vendas</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right"></ul>
            </div>
            <!--/.nav-collapse -->

        </div>
    </div>