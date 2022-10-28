<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA CONTROLE DE PORTARIA</title>

        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
<link href="css/bootstrap.min.css" rel="stylesheet">
        
</head>

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
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col">
      
    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body"><!--  <form method="POST" action="valida.php">
            <h2>Área Restrita. Faça login para continuar no sitema. Obrigado!</h2>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required autofocus>
            <label>Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Acessar</button>
        </form> -->
        
        <form method="POST" action="valida.php">
				<h2>Área Restrita. Faça login para continuar no sitema. Obrigado!</h2>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" type="email" name="email" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input class="form-control" type="password" name="senha" placeholder="Senha">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
        <p>
            <?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
	   </div>
	   
	   </th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th align="center" scope="col"> <img src="e7fb1b20013af4ee72dd0d3c45b1c4d6.jpg" width="600" height="400" alt="POLO TEXTIL" longdesc="#" /></th>
  </tr>
  <tr>
    <th scope="col"><p>Inaugurado em 28/08/2011</p>
    <p>A Prefeitura de Inhumas, em parceria com os empresários do setor têxtil   da cidade inaugurou no domingo (28) a primeira etapa do Polo Têxtil   Ivone Heitor de Paula Vaz. O complexo está sendo instalado em uma área   de 50 mil m², localizada na Fazenda Saleiro e tem espaço para 52   galpões, dos quais  já estão em funcionamento.</p></th>
  </tr>
</table>
</body>
</html>