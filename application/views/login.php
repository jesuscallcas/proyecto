<?php $this->load->view('includes/header-login'); 
      $this->load->view('includes/nli_navbar'); ?>
<div style="
	
		top:10%;
		left:50%;
	
		
		margin-top:-100px;  
		border:1px;
		padding:5px" class="container">
  <div 			  class="login">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div  class="account-wall">
            	<div align="center" >
                	<img style="width: 200px; height: 200px;" src="<?=base_url('img/goku.png'); ?>" alt="">
                </div>
                <form  class="form-signin" action="<?=site_url('login/ValidarUsuario'); ?>" method="post" accept-charset="utf-8" id="login"> 
</br>                    
                    <input type="text" id="usuario" name="usuario" placeholder="Digite su n&uacute;mero de identificaci&oacute;n" autofocus class="form-control" pattern="[0-9]{6,10}" required oninput="check_usuario(this);"></br>
                <input type="password" id="pass" name="pass" placeholder="Escriba su contrase&ntilde;a" class="form-control" pattern="[A-Za-z0-9-_/./-/\s]{3,100}" required oninput="check_pass(this);"></br>
                <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit" aria-label="center Align"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar</button>  
                <br />                
                               
				</form>
         	</div> 
         </div>         
      </div>
   </div> 
</div>  
<script src="<?=base_url('plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
<script src="<?=base_url('dist/js/validar.js'); ?>"></script>
<script src="<?=base_url('plugins/pnotify/pnotify.custom.min.js'); ?>" type="text/javascript"></script>
<footer class="main-footer">
    <p style="color: white" align="center"><strong>Desarrollador &copy; 2017 <a href="http://www.nasa.gov">Don Arturo Nasa Web</a>.</strong> Todos los derechos reservados.</p>
</footer>