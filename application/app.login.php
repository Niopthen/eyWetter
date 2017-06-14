<?php

/*
 *
 * ===============================================
 * Name: app.login.php
 * ===============================================
 * Beschreibung:
 * Login Steuerung
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

/* Starte den JsonController und initialisiere ihn */
require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.json_controller.php';
$JsonController = new JSONController();

// Prüfe die Übergebenen Login Daten
if ((!empty($_POST['LOGIN_NAME'])) && (!empty($_POST['PASSWORD'])))
{
	require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.sql_controller.php';

	$SqlController = new SqlController('mysql');
	$LoginStatus = $SqlController->Login($_POST['LOGIN_NAME'], $_POST['PASSWORD']);

	switch ($LoginStatus)
	{
		// kein Account verfügbar oder Passwort falsch
		case 0:
			$_SESSION['ERROR']['LOGIN']['NO_ACCOUNT'] = TRUE;
			$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.login.account.no', '', 240, 180));
			break;

		// Anmeldung
		case 1:
			require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.session_controller.php';
			$SessionController = new SessionController('LOCATION');
			$DisplayController = new DisplayController();
			$SessionController->Create($_SESSION['ACCOUNT']);
			$_SESSION['TMP']['LOGGEDIN'] = TRUE;
			$_SESSION['TMP']['LANGUAGE'] = $_SESSION['ACCOUNT']['user_language'];
			$JsonController->JSON_add('INNER_PAGE', $DisplayController->ShowInnerPage());


			// erstelle mir die FAQ Liste
			if (SW_MAKE_FAQ == TRUE)
			{
				$FaqDaten = $SqlController->GetFAQ();
				$FAQ_HTML_PAGE = $FaqDaten != NULL ? $DisplayController->ShowFaqPage($FaqDaten) : NULL;
				$FAQ_HTML_PAGE != NULL ? $JsonController->JSON_add('FAQ_DATEN', $FAQ_HTML_PAGE) : '';
			}

			// Hole mir die Default Werte
			$SqlController->GetDefaultFilter(); // schreibe die Default Filer nach $_SESSION['GLOBAL_VARS']['DEFAULT_FILTER']


			// Hole mir nach der Anmeldung die Display Informationen
			require_once 'app.login.display.php';

			break;

		// Falsches Passwort
		case 2:
			$_SESSION['ERROR']['LOGIN']['WRONG_PASSWORD'] = TRUE;
			$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.login.account.password.false', '', 240, 180, TRUE));
			break;

		// Account gesperrt
		case 3:
			$_SESSION['ERROR']['LOGIN']['ACCOUNT_LOCKED'] = TRUE;
			$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.login.account.locked', '', 240, 180, TRUE));
			break;

		// keine weitere Lizenz verfügbar
		case 4:
			$_SESSION['ERROR']['LOGIN']['NO_LICENSE_AVAILABLE'] = TRUE;
			$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.login.account.license.false', '', 240, 180, TRUE));
			break;

		// Die Anmeldung über einen weiteren Tab angefordert
		case 5:
			$_SESSION['ERROR']['LOGIN']['LOGIN_NEW_TAB'] = TRUE;
			$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText('icm.login.newtab.false', '', 240, 180, TRUE));
			break;

		// Globaler System Fehler
		default:
			$_SESSION['ERROR']['LOGIN']['SYSTEM_ERROR'] = TRUE;
			$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText($GLOBALS['DEFAULT_SYSTEM_MESSAGE'], '', 240, 180, TRUE));
			break;
	}
}
else
{
	$JsonController->JSON_add('NOTIFY', $SqlController->NotifyText($GLOBALS['DEFAULT_SYSTEM_MESSAGE']));
}


$JsonController->DisplayJsonData();
?>