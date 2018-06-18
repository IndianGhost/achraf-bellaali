<?php
// Initialisation
// include 'liens/init.php';

// D�but de la tamporisation de sortie
ob_start();
	
// Si un module est specifi�, on regarde s'il existe
if (!empty($_GET['module'])) {

	$module = dirname(__FILE__).'/'.$_GET['module'].'/';//la fct dirname retourne le chemin du repertoire du dossier ou se trouve l index.
	
	// Si l'action est specifi�e, on l'utilise, sinon, on tente une action par d�faut
	$action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';
	
	// Si l'action existe cad si le ficher existe : on l'ex�cute 
	if (is_file($module.$action)) {

		include $module.$action;

	// Sinon, on affiche la page d'accueil !
	} else {

		include 'links/home.php';
	}

// Module non specifi� ou invalide ? On affiche la page d'accueil !
} else {

	include 'links/home.php';
}

// Fin de la tamporisation de sortie
$contenu = ob_get_clean();

include 'links/header.php';
echo $contenu;	
include 'links/footer.php';
