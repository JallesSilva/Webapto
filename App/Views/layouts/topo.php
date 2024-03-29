<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <base href="http://127.0.0.1/vendas/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>WebApto</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/AdminLTE.css" rel="stylesheet" />
        <link href="css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
        <link rel="stylesheet" type="text/css" href="css/example.css.css" />
            <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet" />
            <!-- Color Box -->
        <link rel="stylesheet" href="css/colorbox.css" />
        <link rel="stylesheet" href="css/bootstrap-select.css" />
        <link rel="stylesheet" href="css/skin-red.min.css" />
        <style type="text/css">
            @media print {
                .noprint { display: none; }
            }
        </style>

            <!-- Botao pesquisa -->
        <script language="JavaScript" src="js/shortcut.js"></script>
            <script>
                shortcut.add("F9", function ()
                {
                    document.consulta.consulta.focus();
                });
            </script>
            <!-- Final botao pesquisa-->
    </head>

<body>

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
                                <a href="produto/">Lista Produtos</a>
                            </li>
                            <li>
                                <a href="produto/adicionar">Adicionar Produto</a>
                            </li>
                        </ul>

                    </li>
                    <li><a href="carrinho">Carrinho</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cliente">Gerenciar clientes</a></li>
                            <li><a href="cliente/adicionar">Adicionar Cliente</a></li>
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
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
            <!--/.nav-collapse -->

        </div>
    </div>

    <!--/.navbar-collapse -->
    <!-- <li class="dropdown user-dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
       <ul class="dropdown-menu">
         <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
         <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
         <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
         <li class="divider"></li>
         <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
       </ul>
     </li>
   </ul>
 </div>
    --><!-- /.navbar-collapse -->    
    <div id="page-wrapper">
</body>