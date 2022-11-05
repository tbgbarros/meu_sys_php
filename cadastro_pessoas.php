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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<body>
<table class="list-inline  sticky-top" width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr >
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
  <img class="imgTamanho navbar-brand" src="./img/logo.png" style="width:110px;height:60px;"></img>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">INICIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro_pessoas.php">CADASTRAR</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="entrada.php">LIBERAR ENTRADA</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="s_sair.php">LIBERAR SAIDA</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="r_entrada.php">RELAÇÃO DE ENTRADAS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="pesquisa.php">PESQUISA CADASTROS</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success my-2 my-sm-0" href="sair.php" type="button">SAIR</button>
    </form>
  </div>
</nav>

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

