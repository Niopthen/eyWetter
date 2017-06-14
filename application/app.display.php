<?php

/*
 *
 * ===============================================
 * Name: class.display.php
 * ===============================================
 * Beschreibung:
 * hole mir die notwendigen Display Daten
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

// --=== Lade die Controller und Starte Sie ===--
require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.sql_controller.php';
require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.json_controller.php';

$SqlController = new SqlController('mysql');
$JsonController = new JSONController();

// --=== Hole mir die DisplayDaten für das Übergebene Display ===--
$DisplayDaten = $SqlController->GetUserDisplayDaten($_POST['DISPLAY_ID']) != NULL ? $SqlController->GetUserDisplayDaten($_POST['DISPLAY_ID']) : NULL;

// --=== setze die SESSION DISPLAY Daten einer vorherigen Anfrage zurück ===--
if (key_exists('DISPLAY', $_SESSION))
{
	unset($_SESSION['DISPLAY']);
	unset($_SESSION['TMP']['SQL']);
	unset($_SESSION['TMP']['TENDENCY']);
	unset($_SESSION['TMP']['DISPLAY']);
	unset($_SESSION['TMP']['ALARM_SOUND']);
}

// --=== wenn Display Daten vorhanden sind dann hole mir das Layout ===--
if (($DisplayDaten != NULL) && (count($DisplayDaten) == 1))
{
	$DisplayValues = $DisplayDaten[0];

	// --=== prüfe ob das Display aktive Container besitzt ===--
	if ($SqlController->GetDisplayContainer($DisplayValues['display_id']) == 1)
	{
		$JsonController->JSON_add('DISPLAY_LAYOUT', $SqlController->GetDisplayLayout($DisplayValues['display_id'], $DisplayValues));
	}
	else
	{
		$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.display.container.no', '', NULL, NULL, TRUE, 10000));
	}
}
else
{
	$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.display.no', '', NULL, NULL, TRUE, 10000));
	require_once 'app.logout.php';
}

// --=== setze das Format der Uhr ===--
if (is_array($_SESSION['DISPLAY']) && key_exists('CLOCK_FORMAT', $_SESSION['DISPLAY']))
{
	$JsonController->JSON_add('CLOCK_FORMAT', $_SESSION['DISPLAY']['CLOCK_FORMAT']);
}
else
{
	$JsonController->JSON_add('CLOCK_FORMAT', '1');
}



$JsonController->DisplayJsonData();
?>