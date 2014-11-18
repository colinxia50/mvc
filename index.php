<?php
	require_once('function.php');
	$controllerAllow = array('test','index');
	$methodAllow = array('test','index','show');
	$get_controller = empty($_GET['c'])?'index':$_GET['c'];
	$get_method = empty($_GET['m'])?'index':$_GET['m'];
	$controller = in_array($get_controller,$controllerAllow)?daddslashes($get_controller):'error';
	$method = in_array($get_method,$methodAllow)?daddslashes($get_method):'index';
	C($controller,$method);
//http://localhost/mvc/index.php?c=index&m=index
?>