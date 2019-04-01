<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ICB-Académico">
  <meta name="author" content="José Ramos">
  <link href="<?=base_url('img/ico/favicon.ico'); ?>" rel="shortcut icon">
  <title>Mundo Infantil</title>  
  <link href="<?=base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">  
  <link href="<?=base_url('bootstrap/css/bella.css'); ?>" rel="stylesheet" type="text/css">   
  <link href="<?=base_url('bootstrap/css/login.css'); ?>" rel="stylesheet" type="text/css"> 
  <link href="<?=base_url('plugins/pnotify/pnotify.custom.min.css')?>" rel="stylesheet" type="text/css" />   
  <? if(isset($respuesta)){
	 if($respuesta[0]==1){ ?>
	<script type="text/javascript">
		function error(){
			new PNotify({
				styling: 'bootstrap3',
				title:'Error',
        		text: '<?=$respuesta[1]?>',
				type: 'error'	
     		});
		};
		window.onload = error;
	</script>    
    <? } if($respuesta[0]==2){ ?>
       <script type="text/javascript">
			function success(){
				new PNotify({
					styling: 'bootstrap3',
					title:'Proceso Satisfactorio',
        			text: '<?=$respuesta[1]?>',
					type: 'success'	
     			});
			};
			window.onload = success;	
		</script>    
	<? } if($respuesta[0]==3){ ?>
       <script type="text/javascript">
			function warning(){
				new PNotify({
					styling: 'bootstrap3',
					title:'Cuidado',
        			text: '<?=$respuesta[1]?>',
					type: 'notice'	
     			});
			};
			window.onload = warning;	
		</script>
	<? }}
		if(isset($error)){?>
	<script type="text/javascript">
		function error(){
			new PNotify({
				styling: 'bootstrap3',
				title:'Error',
        		text: '<?=$error?>',
				type: 'error'	
     		});
		};
		window.onload = error;
	</script>    
    <? } if(isset($success)){ ?>
       <script type="text/javascript">
			function success(){
				new PNotify({
					styling: 'bootstrap3',
					title:'Proceso Satisfactorio',
        			text: '<?=$success?>',
					type: 'success'	
     			});
			};
			window.onload = success;	
		</script>    
	<? }?>
	?>     
</head>
<body class="skin-blue">