<?php

/*
 *
 * ===============================================
 * Name: bootstrap.php
 * ===============================================
 * Beschreibung:
 * globales zuweisungs und lade script
 *
 * ===============================================
 *
 * Author: Niopthen
 *
 */

// *** Starte die Session ***
session_start();

// *** vordefinierte Session Keys ***
$_SESSION['TEMP'] == !isset($_SESSION['TEMP']) ? '' : $_SESSION['TEMP'];
$_SESSION['SYSTEM'] == !isset($_SESSION['SYSTEM']) ? '' : $_SESSION['SYSTEM'];




// ********************************************************************************************************************************************************

if (!isset($_SESSION['TMP']['WRITEABLE_TMP_FOLDERS']))
    $_SESSION['TMP']['WRITEABLE_TMP_FOLDERS'] = FALSE;

// --=== Pfade ===--
defined('APPLICATION_PATH') or define('APPLICATION_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

defined('LIBRARY_PATH') or define('LIBRARY_PATH', APPLICATION_PATH . '..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR);

defined('CONTROLLER_PATH') or define('CONTROLLER_PATH', APPLICATION_PATH . 'controller' . DIRECTORY_SEPARATOR);

defined('SQLITEDB_PATH') or define('SQLITEDB_PATH', APPLICATION_PATH . 'database' . DIRECTORY_SEPARATOR);

defined('LOG_PATH') or define('LOG_PATH', APPLICATION_PATH . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR);

// --=== Definiere Konstanten für die öffentlichen Ordner ===--
defined('JS') or define('JS', 'js' . DIRECTORY_SEPARATOR);

defined('JS_PLUGINS') // depricated ...
        or define('JS_PLUGINS', JS . 'jquery' . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR);

defined('JQUERY') or define('JQUERY', JS . 'jquery' . DIRECTORY_SEPARATOR);

defined('JQUERY_PLUGINS') or define('JQUERY_PLUGINS', JQUERY . 'plugins' . DIRECTORY_SEPARATOR);

defined('CSS') or define('CSS', 'css' . DIRECTORY_SEPARATOR);

defined('IMG') or define('IMG', 'img' . DIRECTORY_SEPARATOR);

defined('SND') or define('SND', 'sound' . DIRECTORY_SEPARATOR);


// --=== Erweiterung des Globalen INCLUDE Pfades ===--
set_include_path(
        APPLICATION_PATH . PATH_SEPARATOR
        . LIBRARY_PATH . PATH_SEPARATOR
        . CONTROLLER_PATH . PATH_SEPARATOR
        . SQLITEDB_PATH . PATH_SEPARATOR
        . get_include_path()
);


// --=== Lade die Konfigurationsdatei ===--
// ---=== einbinden der Standard Konfiguration
require_once 'config' . DIRECTORY_SEPARATOR . 'config.php';


// --=== Lade zusaetzliche Klassen und Konfigurationsdaten ===--
require_once 'config' . DIRECTORY_SEPARATOR . 'config.db.php'; // < einbinden der DB Konfigurationen >
require_once 'config' . DIRECTORY_SEPARATOR . 'config.sqlquery.php'; // < lade die SQL Anweisungen der App >
require_once 'Smarty' . DIRECTORY_SEPARATOR . 'Smarty.class.php'; // < einbinden von SMARTY3 >
require_once 'eylib' . DIRECTORY_SEPARATOR . 'eylib.class.php'; // < einbinden der eigenen Bibliothek eylib >
// --=== starte die Klasse von eylib ===--
$eylib = new eylib();

// --=== Prüfe ob bestimmte Ordner beschreibbar sind ===--
if ($_SESSION['TMP']['WRITEABLE_TMP_FOLDERS'] != TRUE)
{
    if (!(is_writable(APPLICATION_PATH . 'temp' . DIRECTORY_SEPARATOR . 'templates_c' . DIRECTORY_SEPARATOR)) && (!is_writable(APPLICATION_PATH . 'temp' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR)) && (!is_writable(APPLICATION_PATH . 'temp' . DIRECTORY_SEPARATOR . 'app_log' . DIRECTORY_SEPARATOR)))
    {
        $eylib->error_handler('TEMP: Verzeichnisse sind nicht beschreibbar', TRUE);
        die();
    }
    else
    {
        $_SESSION['TMP']['WRITEABLE_TMP_FOLDERS'] = TRUE;
    }
}

// --=== Setze den TIME Bereich innerhalb von SESSION ===--
if (!key_exists('TIME', $_SESSION))
    $_SESSION['TIME'] = time();

// --=== Setze die IP-Adresse in die Session ===--
$_SESSION['TMP']['IP_ADDRESS'] = IP_ADDRESS;
