<?php

/*
 *
 * ===============================================
 * Name: app.logout.php
 * ===============================================
 * Beschreibung:
 * Steuerung der Abmeldung
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

require_once 'controllers' . DIRECTORY_SEPARATOR . 'class.session_controller.php';
$SessionController = new SessionController('LOCATION');
$SessionController->Delete();

$_SESSION = array ();

if (ini_get('session.use_cookies'))
{
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
session_destroy();
?>