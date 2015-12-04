<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

       echo(' <div id="page-content-wrapper">
            
                    <div class="col-lg-12">
                      <img src="charts.jpg" alt="charts">
             
        </div>');

} else {
	echo 'Vous devez vous connecter pour visionner cette page.';
}