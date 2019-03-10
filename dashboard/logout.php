<?php 
	$filedir = realpath(dirname(__FILE__));
    require_once $filedir.'/../libs/Session.php';
	Session::init();
	Session::destroy();
	header("Location: login.php");
?>