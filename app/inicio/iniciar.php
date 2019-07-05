<?php 
	session_start(); //inicia sesion
	session_destroy(); // elimina posibles sesiones

	
	include("../vistasgenerales/headhtml.php");
	include("../vistasgenerales/cabacera.php");
?>
	<div id="app" v-cloak>
		<div class="login-box">
			<div class="login-logo" style="padding-bottom: 0px;margin-bottom: 10px;">
				<h5 style="color: rgb(238, 238, 238);font-size: 21px;margin-bottom: 0px;padding-bottom: 0px;">IESTP Eleazar Guzmán Barrón - Huaraz</h5>
			</div>			
			<div class="login-box-body">
				<p class="login-box-msg">Inicio de Sessión</p>
				<form action="../../controlador/login.php" method="post">
					
					<div class="form-group has-feedback">
						<input type="email" class="form-control" placeholder="Ingrese su email" name="email"/>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" name="password"/>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sessión</button><br>
						</div>
						<div class="col-xs-12">
							<a href="" class="btn btn-primary btn-block btn-flat">Regresar</a>
						</div><!-- /.col -->
					</div>
				</form>				
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->
	</div>

<?php
	include("../vistasgenerales/piepagina.php");
 ?>
	