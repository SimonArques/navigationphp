<?php

session_start();
//Tableau des pages autorisées à l'include
$pagesOK['Statistiques'] = 'statistiques.php';
$pagesOK['Badges'] = 'badges.php';
$pagesOK['Temps'] = 'temps.php';
$pagesOK['Index'] = 'index.html';
$pagesOK['Logout'] = 'logout.php';

//Page par defaut
$page = 'Index';
//Si le $_GET['page'] est dans les keys du tableau $pagesOK
if(!empty($_GET['page'])
&& array_key_exists($_GET['page'], $pagesOK))
{
    //Remplace la valeur par defaut par celle de l'URL
    $page = $_GET['page'];
}
?>

<html>
	<head>
	<title>Mon site internet</title>
	</head>
	
	<body>
		
		<div id="menu">
			<?php include('menu.php'); ?>
			<!-- div pour le menu de navigation -->
		</div>
		<div id="page">
			<?php include($pagesOK[$page]); ?>


		</div>
	
	</body>
</html>