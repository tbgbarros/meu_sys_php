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
<br> <a href="sair.php">Sair</a>

<html>
<head>
     <title>-- ENTRADA DE PESSOAS --</title>
     

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    .teste {
	font-size: 9px;
}
    </style>
  <script type="text/javascript" src="jquery-1.3.2.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("input[name='matricula']").blur(function(){
    
	   var $id = $("input[name='id']");
	  var $tipo = $("input[name='tipo']");
      var $identidade = $("input[name='identidade']");
	  var $nome = $("input[name='nome']");
      var $situacao = $("input[name='situacao']");
      var $placa = $("input[name='placa']");
      var $veiculo = $("input[name='veiculo']");
      var $cidade = $("input[name='cidade']");
      var $uf = $("input[name='uf']");
      var $empresa = $("input[name='empresa']");
	  

	  $id.val('Carregando...');
      $identidade.val('Carregando...');
      $tipo.val('Carregando...');
      $nome.val('Carregando...');
	  $situacao.val('Carregando...');
	  $placa.val('Carregando...');
      $veiculo.val('Carregando...');
      $cidade.val('Carregando...');
      $uf.val('Carregando...');	  
      $empresa.val('Carregando...');	  
      
	  
        $.getJSON(
          'function.php',
          { matricula: $( this ).val() },
          function( json )
          {
            $id.val( json.id );
			$identidade.val( json.identidade );
			$tipo.val( json.tipo );
            $nome.val( json.nome );
            $situacao.val( json.situacao );
            $placa.val( json.placa );
            $veiculo.val( json.veiculo );
            $cidade.val( json.cidade );
            $uf.val( json.uf );			
			$empresa.val( json.empresa );
		}
        );
    });
  });
  </script>
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
</table>
  <form class="form-inline" name="entrar" method="post" action="liberar.php">
    <table width="899" border="0">
      <tr>
        <td height="74" colspan="5" align="center"><h1><kbd><strong>____ CONTROLE DE ENTRADA ____</h1></kbd></strong>
</td>
      </tr>
      <tr>
        <td height="36">Matrícula:</td>
        <td align="left"><input name="matricula" type="text" value="" size="20" /></td>
        <td height="37" align="left"></td>
        <td align="left"></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="36">Tipo:</td>
        <td align="left"><input name="tipo" type="text" readonly="readonly" value="" size="50" /></td>
        <td height="37" align="left"><table width="100" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <td>Liberado</td>
            <td><input name="situacao" type="text" readonly="readonly" size="20" /></td>
          </tr>
        </table></td>
        <td align="left"></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td width="110" height="36"> Identidade:</td>
        <td width="267" align="left"><input name="identidade"  readonly="readonly" type="text" size="20" /></td>
        <td colspan="2" align="left"><input name='dataentrada' type='text' disabled value=$dataLocal size='10' style="display:none"></td>
        <td width="58" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="36"> Nome: </td>
        <td align="left"><input name="nome" type="text" readonly="readonly" size="50" /></td>
        <td width="380" align="left"><input name='horaentrada' type='text' disabled value=$hora size='6' style="display:none"><br></td>
        <td width="62" align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="36"> Placa:</td>
        <td colspan="3" align="left"><input name="placa" type="text" value="" />          
          Veiculo:  
          <input name="veiculo" type="text" value="" size="50" /></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="36"> Cidade:</td>
        <td height="36" colspan="3" align="left"><input name="cidade" type="text" readonly="readonly" value="" />          UF:
        <input name="uf" type="text" value="" size="5" maxlength="2" readonly="readonly" /></td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="28"> Empresa:</td>
        <td align="left"><input name="empresa" type="text" value="" size="50" /></td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td></td>
        <td align="left">
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">&nbsp;</td>
        <td align="left"><input type="submit" value="LIBERAR ACESSO" /></td>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
    </table>
    <label>
      </label>
  </form>
  

</body>
</html>
