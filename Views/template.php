<?php

if (isset($_GET['route'])) {

	if (
		$_GET['route'] == 'dashboard' 						||
		$_GET['route'] == 'statistic' 						||
		$_GET['route'] == 'message' 						||
		$_GET['route'] == 'notifications' 					||
		$_GET['route'] == 'customers'	 					||
		$_GET['route'] == 'offers' 							||
		$_GET['route'] == 'bussines'						||
		$_GET['route'] == 'profile'
	) {

		include("Views/includes/header.php");
		include("modules/".$_GET['route'].".php");
		include("Views/includes/footer.php");

	}else if(
		$_GET['route'] == 'login' ||
		$_GET['route'] == 'forget-password'
	
	) {
		include("Views/modules/Login/login-header.php");
		include("Views/modules/Login/" . $_GET['route'] . ".php");
		include("Views/modules/Login/login-footer.php");
	}
	else {

		include("Views/modules/404.php");
	}

} else {
	include("Views/includes/header.php");
	include("modules/dashboard.php");
	include("Views/includes/footer.php");

}

?>