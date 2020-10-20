<?php

session_start();

	//récupération des données postées (inputs du formulaire)
	$identifiant = trim(($_POST['identifiant']));
	$mdp = trim($_POST['mdp']);

	//on remet les données en variable de session au cas où
	//il y a erreur de saisie de retourner au formulaire avec
	//ces données
	$_SESSION['identifiant'] = $identifiant;
	$_SESSION['mdp'] = $mdp;
	
	$_SESSION['msg_erreur'] = "";

?>