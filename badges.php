<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

		echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['username'].' et votre mot de passe est '. $_SESSION['password'].'.' ;
	echo '<img src="timesheet.jpg" alt="charts">';
	echo '<br />';

	include ('../texte.html');

} else {
	echo 'Vous devez vous connecter pour visionner cette page.';
}

