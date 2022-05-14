 <?php
include_once("principal.php");
	
?>
<?php
				if(isset($_SESSION['mensagem'])){
					echo $_SESSION['mensagem'];
					unset($_SESSION['mensagem']);
				}
			?>
 <?php
 session_start();
 
	$ID = $_GET['ID'];
	$_SESSION['ID']= $ID;
	//Executa consulta
	$result = mysql_query("SELECT * FROM funcionario WHERE ID = '$ID' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
?>

<div class="container-fluid">
<div class="row-fluid">
<div class="col col-lg-H col-md-H col-sm-H haggy">
	
    <div class="panel panel-default panel-table">
        <div class="panel-heading" >
			   
			<p> 	
	            <div class="divH"><label>Editar dados do Estudantes</label></div>      
	        </p> 
		</div>
		<div class="panel-body">
          <form class="form-horizontal"  method="POST" action="funcionario-processa-editar.php">
          <div class="form-group">
				<div class="col-sm-9">
				</div>
			  </div>
		  		<input type="hidden" class="form-control" name="ID" value="<?php echo $resultado['ID'];?>">
				<input type="hidden" class="input sm form-control" name="idUsuario" value="<?php echo $resultado['idUsuario']?>">
			<div class="col-sm-12">
			  <div class="form-group">
				<div class="col-sm-6">
				Nome:
				  <input type="text" class="input-sm form-control" name="Nome" value="<?php echo $resultado['Nome']?>" placeholder="Nome" required="" autofocus="">
				</div>
				<div class="col-sm-6">
				Apelido:
				  <input type="text" class="input-sm form-control" name="Apelido" value="<?php echo $resultado['Apelido']?>"  required="" autofocus="">
				</div>
			  </div>
			</div>
			  
			  <div class="col-sm-12">
			  <div class="form-group">
				<div class="col-sm-6">
				Data de Nascimento:
				  <input type="Date" class="input sm form-control" name="DOB" value="<?php echo $resultado['DOB']?>" placeholder="Data de Nascimento" required="">
				</div>
				<div class="col-sm-6">
				Numero da matricula:
				  <input type="text" class="input sm form-control" name="BI" value="<?php echo $resultado['BI']?>" placeholder="Numero da matricula" required="">
				</div>
			  </div>
			 </div>
			 
              <div class="col-sm-12">
			  <div class="form-group">
				<div class="col-sm-6">
				Email:
				  <input type="text" class="input sm form-control" name="Email" value="<?php echo $resultado['Email']?>" placeholder="Naturalidade" required="">
				</div>
			  </div>
			  </div>
			 
			 <div class="col-sm-12">
			  <div class="form-group">
				<div class="col-sm-6">
				Celular:
				  <input type="text" class="input sm form-control" name="Contacto" value="<?php echo $resultado['Contacto']?>" placeholder="Estado Civil" required="">
				</div>
			 </div>
			</div>
			<p class="clearfix">
			 </p>	
			 	
			  <div class="col-sm-12">
			  <div class="form-group">
			  	<div class="col-sm-6">
				Sexo:
				  <select class="input sm form-control" name="Sexo" required="">
				  	<option value="<?php echo $resultado['Sexo']?>"> <?php echo $resultado['Sexo']?></option>
				  	<option value="Femenino" >Femenino</option>
				  	<option value="Masculino" >Masculino</option>
					  <option value="outro">outro</option> 
					  
					</select>
				</div>
				
			  </div>
			 </div>
			 <div class="col-sm-6 col col-xs-6 text-left">
				  <button type='button' onclick="Voltar()" class='btn  btn-info'><span class="glyphicon glyphicon-remove"></span>   Cancelar</button>
				</div>
				<div class="col-sm-6 col col-xs-6 text-right"> 
				  <button type="submit"  class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Gravar</button>
				</div>
				</form>
	</div>
			  
</div>
</div>
</div>