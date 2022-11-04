<? 
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
             $dataLocal = date('d/m/Y');
             $hora = date('H,i');
             echo $dataLocal;
			 
session_start();
if(!isset($_SESSION["usuarioNome"]) and !isset($_SESSION["usuarioNome"]))
{
	header("Location:index.php");exit;
	}else {
	echo "Usuario: ". $_SESSION['usuarioNome'];
	}
?> 



<html>
<head>
<title> SISTEMA DE CADASTRO DE PESSOAS </title>

<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#33b5e5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="./css/meucss.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <link rel='stylesheet' id='roboto-subset.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5' type='text/css' media='all' />
    <meta charset="utf-8">
    <meta name="description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta name="image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta itemprop="name" content="Bootstrap Login Form - free examples, templates &amp; tutorial">
    <meta itemprop="description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta itemprop="image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Bootstrap Login Form - free examples, templates &amp; tutorial">
    <meta property="twitter:description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta property="twitter:site" content="@MDBootstrap">
    <meta property="twitter:creator" content="@MDBootstrap">
    <meta property="twitter:image:src" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta property="twitter:player" content="">
    <meta property="og:title" content="Bootstrap Login Form - free examples, templates &amp; tutorial">
    <meta property="og:description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta property="og:image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta property="og:url" content="https://mdbootstrap.com/docs/standard/extended/login/">
    <meta property="og:site_name" content="MDB - Material Design for Bootstrap">
    <meta property="og:locale" content="en_US">
    <meta property="og:video" content="">
    <meta property="fb:admins" content="443467622524287">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/favicon.ico" />		
<link href="css/bootstrap.min.css" rel="stylesheet">

<body>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th scope="col"><ul class="nav nav-tabs">
   <li role="presentation" class="active"><a href="index.php">INICIO</a></li>
  <li role="presentation"><a href="cadastro_pessoas.php">CADASTRAR</a></li>
  <li role="presentation"><a href="entrada.php">LIBERAR ENTRADA</a></li>
  <li role="presentation"><a href="s_sair.php">LIBERAR SAIDA</a></li>
  <li role="presentation"><a href="r_entrada.php">RELAÇÃO DE ENTRADAS</a></li>
 <!--  <li role="presentation"><a href="r_ent_sai.php">ENTRADA/SAIDA</a></li> -->
  <li role="presentation"><a href="pesquisa.php">PESQUISA CADASTROS</a></li> 
</ul>&nbsp;</th>
	<th><a href="sair.php">Sair</a></th>
  </tr>
</table>
   <div class='container'>
		<fieldset>
			<legend>
			<h1>Formulário de Cadastros</h1></legend>
			
		  <form action="action_foto.php" method="post" id='form-contato' enctype='multipart/form-data'>
	  <div class="row">
					<label for="nome">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

		    <div class="form-group">
        <label for="matricula">Matrícula:</label>
        <input type="matricula" class="form-control" id="matricula" name="matricula" placeholder="Informe a Matricula">
        
            </div>

			    <div class="form-group">
			      <label for="tipo">Tipo de Cliente:</label>
                  <input type="tipo" class="form-control" id="tipo" name="tipo" placeholder="Informe o Tipo de Cliente">
		
	    </div>
			    <div class="form-group">
			      <label for="nome">Nome:</label>
			      <input type="nome" class="form-control" id="nome" maxlength="30" name="nome" placeholder="Informe o Nome">
		
	    </div>
			    <div class="form-group">
			      <label for="identidade">RG:</label>
			      <input type="identidade" class="form-control" id="identidade" maxlength="25" name="identidade" placeholder="Informe o RG">
		
	    </div>

			    <div class="form-group">
			      <label for="placa">Placa:</label>
			      <input type="placa" class="form-control" id="placa" maxlength="12" name="placa" placeholder="Informe a Placa">
		
	    </div>
			    <div class="form-group">
			      <label for="veiculo">Veículo:</label>
			      <input type="veiculo" class="form-control" id="veiculo" maxlength="20" name="veiculo" placeholder="Informe o Veiculo">
		
	    </div>
                <div class="form-group">
			      <label for="cidade">Cidade:</label>
			      <input type="cidade" class="form-control" id="cidade" maxlength="13" name="cidade" placeholder="Informe a Cidade">
		
	    </div>
			    <div class="form-group">
			      <label for="uf">UF:</label>
			      <input type="uf" class="form-control" id="uf" maxlength="3" name="uf" placeholder="Informe o Estado">
		
	    </div>
			    <div class="form-group">
			      <label for="empresa">Empresa:</label>
			      <input type="empresa" class="form-control" id="empresa" maxlength="25" name="empresa" placeholder="Informe a Empresa">
		
		    </div>
			
            <div>
			    <div class="form-group">
			     
			      <input type="datacadastro" name="datacadastro" id="datacadastro" disabled value=$dataLocal size="15" style="display:none">
		
		    </div>			
                <div class="form-group">
                        <label for="acesso">Acesso Liberado:  </label>
			            <label class="radio-inline"> 
						<input type="radio" name="situacao" value="1">
						<span class="label label-success">SIM</span> 
	                   </label>
                 	   <label class="radio-inline"> 
						<input type="radio" name="situacao" value="2">
						<span class="label label-danger">NAO</span> 
	                   </label>

               </div>

	    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Gravar
		    </button>
			    <a href='cadastro_pessoas.php' class="btn btn-danger">Cancelar</a>
		  </form>
	 </fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</div></body>
</head>

