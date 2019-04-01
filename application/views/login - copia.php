<? $this->load->view('includes/header-login'); ?>
<? $this->load->view('includes/nli_navbar'); ?>
<div class="container">
  <div class="login">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
            	<div align="center">
                	<img src="<?=base_url('img/unknown.png'); ?>" alt="">
                </div>
                <form class="form-signin" action="<?=site_url('login/ValidarUsuario'); ?>" method="post" accept-charset="utf-8" id="login">             	<input type="text" id="usuario" name="usuario" placeholder="Digite su número de identificación" autofocus class="form-control" pattern="[0-9]{6,10}" required oninput="check_usuario(this);">
                <input type="password" id="pass" name="pass" placeholder="Escriba su contraseña" class="form-control" pattern="[A-Za-z0-9-_/./-/\s]{3,100}" required oninput="check_pass(this);">
                <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit" aria-label="center Align"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Entrar</button>  
                <br />                
                <a href="<?=site_url('login/Registro'); ?>" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registrese</a>                
				</form>
         	</div> 
         </div>         
      </div>
   </div> 
</div>  
<script src="<?=base_url('plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
<script src="<?=base_url('dist/js/validar.js'); ?>"></script>
<script src="<?=base_url('plugins/backstretch/jquery.backstretch.min'); ?>"></script>
<script src="<?=base_url('plugins/pnotify/pnotify.custom.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
$.backstretch([
      "<?=base_url();?>img/image1.jpg"
    , "<?=base_url();?>img/image2.jpg"
    , "<?=base_url();?>img/image3.jpg"
], {duration: 5000, fade: 1000});    
</script>
<footer class="main-footer">
  <p align="center"><strong>Copyright &copy; 2015-2016 <a href="http://www.colombobolivariano.edu.co">ICB-Académico</a>.</strong> Todos los derechos reservados.</p>
</footer>