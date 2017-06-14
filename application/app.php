<?php

/*
 *
 * ===============================================
 * Name: app.php
 * ===============================================
 * Beschreibung:
 * Hauptdatei der Anwendung (Application)
 *
 * ===============================================
 *
 * $Author$
 * $LastChangedDate$
 * $LastChangedBy$
 * $Id$
 * $Revision$
 *
 */

/* Übersetzung von Variablen */
$post_switch = ((!$_POST) || (!key_exists('MODUL', $_POST))) ? 'NONE' : $_POST['MODUL'];


/*  Hole die Controller Funktionen */
require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.display_controller.php';
require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.language_controller.php';


/* Sprachumschaltung */
if (isset($_GET['lng']))
{
	$heute = date("d", time());
	if (substr(md5('de'), 0, $heute) == $_GET['lng'])
	{
		$_SESSION['TMP']['LANGUAGE'] = 'de';
	}
	elseif (substr(md5('en'), 0, $heute) == $_GET['lng'])
	{
		$_SESSION['TMP']['LANGUAGE'] = 'en';
	}
	else
	{
		$_SESSION['TMP']['LANGUAGE'] = 'en';
	}
}


/* Starte benötigte Klassen */
$DisplayController = new DisplayController();
$LanguageController = new LanguageController();


/* Umschaltung anhand er Optionen */
switch ($post_switch)
{
	case 'NONE' : // keine Daten Login Maske
		unset($_SESSION['ERROR']['LOGIN']);
		unset($_SESSION['ACCOUNT']);

		/* pruefe ob es sich hier um einen ThinClient handelt */
		require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.sql_controller.php';
		$SqlController = new SqlController('mysql');
		$_SESSION['TMP']['THINCLIENT'] = $SqlController->IsThinClient() == TRUE ? TRUE : FALSE;

		/* Zeige die StartSeite */
		$DisplayController->ShowOuterPage();
		break;

	case 'LOGIN': // Anmelden
		require_once 'app.login.php';
		break;

	case 'LOGOUT': // Abmelden
		require_once 'app.logout.php';
		break;

	case 'TRIGGER': // Aktualisierungs Trigger
		require_once 'app.trigger.php';
		break;

	case 'DISPLAY': // Display Auswahl
		require_once 'app.display.php';
		break;

	case 'GET_SERVER_TIME': // hole mir die Zeit des Server
		require_once 'app.servertime.php';
		break;

	case 'THINCLIENT_LOGIN': // melde den ThinClient an das System an
		require_once 'app.thinclient.php';
		break;

	default:
		require_once 'app.logout.php';
		break;
}
?>
