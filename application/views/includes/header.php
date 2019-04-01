<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="ICB-Académico">
  <meta name="author" content="José Ramos">
  <link href="<?=base_url('css/ico/favicon.ico'); ?>" rel="shortcut icon">
  <title>SG-Académico</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">   
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" /> 
  <link href="<?=base_url('dist/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('dist/css/skins/_all-skins.css'); ?>" rel="stylesheet" type="text/css" /> 
  <link href="<?=base_url('plugins/pnotify/pnotify.custom.min.css')?>" rel="stylesheet" type="text/css" /> 
  <link href="<?=base_url('plugins/morris/morris.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" />  
  <link href="<?=base_url('plugins/datepicker/datepicker3.css'); ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet/less" type="text/css" href="<?=base_url('plugins/timepicker/timepicker.less'); ?>" />
  <link href="<?=base_url('plugins/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?=base_url('plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css" />     
  <link href="<?=base_url('plugins/steps/steps.css'); ?>" rel="stylesheet" type="text/css" />
  <? if(isset($error)){ ?>
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
	 <? } ?>	
</head>
<body class="skin-blue">