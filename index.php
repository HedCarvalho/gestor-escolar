<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Sistema de Gestao Escolar</title>
<meta name="description" content="Login" />
<meta name="keywords" content="Login" />
<meta name="autor" content="Hedilson Carvalho Gonçalves" />
        
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap/css/theme.css" rel="stylesheet">
<link href="bootstrap/manjolo.css" rel="stylesheet">
<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
<script src="js/modernizr.custom.63321.js"></script>
<style>
</style>

</head>

<body role="document" background="fotos/bg.GIF">
        <div class="container">
			
  
   <!-- coluna de Espacamento  a esquerda-->
   
	    
<div class="col-xs-12  col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3" >
<br>
<section class="main"> 
<form class="form-2" method="post" action="valida-login.php" >
<div class="panel panel-table">
<p class="clearfix">	
<div  class="panel-primary panel-heading text-center" ><H2 class="panel-title "  >Sistema de Gestão Escolar</H2>
</p>
</div>
<div class="panel-body"> 
<div align="center">
<p class="clearfix">
<img src="fotos/logo.png" class="img-responsive" id="logo" alt="responsive image">
</p>
</div>
<p class="clearfix" style="color: red">
<?php
if(isset($_SESSION['loginErro'])){
echo $_SESSION['loginErro'];
unset($_SESSION['loginErro']);
 }
?>
                  
</p>
<p class="clearfix">
					
<input requires autofocus name="usuario" type="imputuser" class="form-control" class="td" size="30" maxlength="25" id="username" placeholder=" &#128272;Usuario"/>
</p>
					
<p class="clearfix">
						
<td><input name="senha" type="password" class="form-control" class="td" size="30" maxlength="25" placeholder=" &#128272;Senha"/>
</p>
<br>
<p class="clearfix">   
<input class="btn btn-lg btn-primary " class="st" id="bt" type="submit" name="Submit" value="Entrar" />
</p>
<a><div align="right">Esqueci a senha</div></a>
			
</div>
</form>​​
</section>
</div>
</div>
</div>
</div>
		
</body>
</html>