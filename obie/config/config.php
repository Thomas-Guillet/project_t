<?php

//CONFIG DES CONSTANTES

if ($_SERVER['SERVER_NAME'] == 'localhost') {

	$sRoot = 'C:/wamp64/www/project_t/obie/';
	$sUrl = 'http://localhost/project_t/obie/';
	$sDossierLocal = 'project_t/obie/';

}else {

	$sRoot = '/';
	$sUrl = 'http://www.thomas-g.fr/obie';
	$sDossierLocal = '/';

}

define ('ROOT', $sRoot);
define ('URL', $sUrl);
define ('DOSSIER_LOCAL', $sDossierLocal);

?>
