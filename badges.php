<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {


	echo ('<body>
	Votre login est '.$_SESSION['username'].' et votre mot de passe est '. $_SESSION['password'].'.
	</br>
	<img src="badges.jpg" alt="charts">
	<br />');


} else {
	echo 'Vous devez vous connecter pour visionner cette page.';
}

