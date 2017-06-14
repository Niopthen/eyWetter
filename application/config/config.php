<?php

/*
 * ===============================================
 * Name: config.php
 * ===============================================
 * Beschreibung:
 * Konfigurationsdatei
 *
 * ===============================================
 */


// *** App Version ***
define(APP_VERSION, '0.1');
define(APP_NAME, 'eyWetter');

// *** Writeable Check ***
$GLOBALS['FOLDERS']['WRITEABLE'] = array();


// *** Internal Default Values ***
define('REFRESH_RATE', 10); 









// ---- from Orginal Version -------------------------------------------------------------------------------------------------------------------------

// --=== DB Instance by Function ===--
$GLOBALS['USE_DB_INSTANCE']['LOGIN'] = 'LOCATION';


// --=== AKTUALISIERUNGEN UND PRUEFUNGEN IN SEKUNDEN ===--
define('REFRESH_APP', 30); // < aktualisierung der Anwendungsdaten (120)
define('REFRESH_APP_CONTAINER_QUERYS', 120); // aktualisiere die Query fuer den Container
define('REFRESH_HEADER', 30);  // Aktualisierung der Header fuer die Container (60)
define('REFRESH_SESSION_KEEP_ALIVE', 30); // Session Information - das die Anwendung noch da ist
define('REFRESH_SURVIVAL_MODE_CHECK', 120); // ueberpruefe den Survival Modus alle
define('REFRESH_THINCLIENT_RELOGIN_TRY', 17); // Neue Anmeldung des ThinClients nach x Sekunden
define('TIMEOUT_SESSION', 120); // Session gueltigkeit
// --=== DEFAULT WERTE ===--
define('DEFAULT_CHART_SERVICENAME_WIDTH', 170); // in Pixel
define('DEFAULT_COLUMN_WIDTH_LEFT', 40); // in Prozent
define('DEFAULT_TEMPLATE_DIR', 'default');
define('WAITBEAM_FAKTOR', 5); // Berechnungsfaktor in Pixel
define('MAX_WAITBEAM_VIEWS', 10); // max Anzeige der Anrufe
// --=== DEFAULT SORTIERUNGEN ===--
$GLOBALS['DEFAULT']['SORT_ORDER']['AGENTS'] = 'column_14 DESC, column_03';
$GLOBALS['DEFAULT']['SORT_ORDER']['SERVICES'] = 'column_01';
$GLOBALS['DEFAULT']['SORT_ORDER']['CHART'] = 'service_name';
$GLOBALS['DEFAULT']['SORT_ORDER']['AGENTSUM'] = '';
$GLOBALS['DEFAULT']['SORT_ORDER']['QUEUE'] = '';


// --=== FARBDEFINITIONEN SCHWELLWERTE FLAECHE ===--
$GLOBALS['TRESHOLD_COLORS']['AREA']['FONT']['GREEN'] = '#FFFFFF';
$GLOBALS['TRESHOLD_COLORS']['AREA']['FONT']['YELLOW'] = '#000000';
$GLOBALS['TRESHOLD_COLORS']['AREA']['FONT']['RED'] = '#FFFFFF';
$GLOBALS['TRESHOLD_COLORS']['AREA']['BACKGROUND']['GREEN'] = '#006633';
$GLOBALS['TRESHOLD_COLORS']['AREA']['BACKGROUND']['YELLOW'] = '#FDD167';
$GLOBALS['TRESHOLD_COLORS']['AREA']['BACKGROUND']['RED'] = '#C92828';

// --=== FARBDEFINITIONEN SCHWELLWERTE RAHMEN ===--
$GLOBALS['TRESHOLD_COLORS']['BORDER']['FONT']['GREEN'] = '#FFFFFF';
$GLOBALS['TRESHOLD_COLORS']['BORDER']['FONT']['YELLOW'] = '#FFFFFF';
$GLOBALS['TRESHOLD_COLORS']['BORDER']['FONT']['RED'] = '#FFFFFF';
$GLOBALS['TRESHOLD_COLORS']['BORDER']['BACKGROUND']['GREEN'] = '#006633';
$GLOBALS['TRESHOLD_COLORS']['BORDER']['BACKGROUND']['YELLOW'] = '#FDD167';
$GLOBALS['TRESHOLD_COLORS']['BORDER']['BACKGROUND']['RED'] = '#C92828';

// --=== LAYOUT TEMPLATES ===--
// ---== DEFAULT APP TEMPLATES ==---
$GLOBALS['TEMPLATE']['OUTER_PAGE'] = 'outer_page.tpl';
$GLOBALS['TEMPLATE']['INNER_PAGE'] = 'inner_page.tpl';
$GLOBALS['TEMPLATE']['MESSAGES'] = 'messages.tpl';
$GLOBALS['TEMPLATE']['FAQ'] = 'faq.tpl';
$GLOBALS['TEMPLATE']['CLOCK'] = 'clock.tpl';

// ---== CONTAINER TEMPLATES ==---
$GLOBALS['TEMPLATE']['CHART'] = 'chart.tpl';
$GLOBALS['TEMPLATE']['AGENTS'] = 'agents.tpl';
$GLOBALS['TEMPLATE']['AGENTSUM'] = 'agentsum.tpl';
$GLOBALS['TEMPLATE']['SERVICES'] = 'services.tpl';
$GLOBALS['TEMPLATE']['QUEUE'] = 'queue.tpl';


// --=== VERWENDETE TABELLEN ===--
$GLOBALS['TABLES']['USER'] = 'v_res_user_acl_user';
$GLOBALS['TABLES']['SESSION'] = 'res_session';
$GLOBALS['TABLES']['MESSAGES'] = 'res_text';
$GLOBALS['TABLES']['DISPLAYS'] = 'v_acl_user_icm_display';
$GLOBALS['TABLES']['DISPLAYS_CONTAINER'] = 'icm_display_container_prop';
$GLOBALS['TABLES']['CONTAINER_NAMEN'] = 'icm_container_name';
$GLOBALS['TABLES']['CONTAINER_COLUMNS'] = 'icm_display_container_col_rt';
$GLOBALS['TABLES']['CONTAINER_QUERY'] = 'icm_container_query';
$GLOBALS['TABLES']['DISPLAY_FILTER'] = 'v_acl_user_icm_displ_filt_par';
$GLOBALS['TABLES']['DISPLAY_FILTER_PAR_TYPE'] = 'icm_display_filt_par_type';
$GLOBALS['TABLES']['RES_LANGUAGE'] = 'res_language';
$GLOBALS['TABLES']['USER_DEFINED_COLUMN_CONFIG'] = 'v_icm_displ_cont_col_rt_prop';
$GLOBALS['TABLES']['VALUE_STATUS_COLORS'] = 'v_icm_displ_val_status_colors';
$GLOBALS['TABLES']['THIN_CLIENT_DISPLAYS'] = 'v_res_asset_netw_display_loc';
$GLOBALS['TABLES']['SURVIVAL_MODE'] = 'v_acm_survival_mode_location';
$GLOBALS['TABLES']['FAQ'] = 'icm_faq';
$GLOBALS['TABLES']['THEME'] = 'v_icm_theme_display_colors';


// --=== SPRACHEN ===--
$GLOBALS['LANGUAGE']['AVAILABLE'] = array('de', 'en');
$GLOBALS['LANGUAGE']['DEFAULT'] = 'en';


// --=== ANMELDUNGEN ===--
$GLOBALS['MULTI_LOGIN'] = TRUE;


// --=== FEHLER ===--
$GLOBALS['DEFAULT_SYSTEM_MESSAGE'] = 'icm.app.default';
$GLOBALS['DEFAULT_MESSAGE']['text'] = 'Global System Error';
$GLOBALS['DEFAULT_MESSAGE']['text_id'] = '99999999';
$GLOBALS['DEFAULT_MESSAGE']['text_style'] = 'E';


// --=== GROUP ORDER DATEN ===--
$GLOBALS['GROUP']['SERVICES'] = TRUE;


// --=== CONTAINER SERVICES ===--
// ---== SERVICES : AKTIONEN FUER DIE ENTSPRECHENDEN SERVICES SPALTEN ==---
$GLOBALS['SERVICES_COLUMNACTION']['column_02'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_06'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_07'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_08'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_09'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_10'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_11'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_12'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_13'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_14'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_15'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_16'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_17'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_18'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_23'] = 'SUM';
$GLOBALS['SERVICES_COLUMNACTION']['column_24'] = 'MAX_TIME';
$GLOBALS['SERVICES_COLUMNACTION']['column_34'] = 'MAX_TIME';    // für das Release 13.11 neu hinzugefügt
// ---== SERVICES : FOLGENDE SPALTEN DUERFEN NICHT GENULLT WERDEN ==---
$GLOBALS['SERVICES_COLUMN_NO_NULL'] = array('column_25', 'column_26');


// ---== SERVICES: ERSETZE DIE ANGEGEBENEN SPALTEN KOMPLETT MIT EINEN SPEZIELLEN ZEICHEN ==---
$GLOBALS['SERVICES_REPLACE_WITH_SIGN'] = array('column_01', 'column_25', 'column_26');
$GLOBALS['SERVICES_REPLACE_SIGN'] = " (&Sigma;)";

// ---== SERVICES : SLA BERECHNUNG (SLA TYPEN) ==---
$GLOBALS['SLA']['TYP']['SLA_30'] = array('TARGET' => 'column_19', 'H_SLA' => 'column_13', 'INC' => 'column_02', 'A_SLA' => 'column_06'); // < SLA BERECHNUNG 20 >
$GLOBALS['SLA']['TYP']['SLA_20'] = array('TARGET' => 'column_20', 'H_SLA' => 'column_14', 'INC' => 'column_02', 'A_SLA' => 'column_07'); // < SLA BERECHNUNG 30 >
$GLOBALS['SLA']['TYP']['SLA_STERN'] = array('TARGET' => 'column_21', 'H_SLA' => 'column_15', 'INC' => 'column_02', 'A_SLA' => 'column_08'); // < SLA BERECHNUNG Stern >
// ---== SERVICES : HANDELED RATE BERECHNUNG ==---
$GLOBALS['SLA']['TYP']['HR_30'] = array('TARGET' => 'column_30', 'H_SLA' => 'column_12', 'INC' => 'column_02', 'A_SLA' => 'column_06'); // < HR BERECHNUNG 30 >
$GLOBALS['SLA']['TYP']['HR_20'] = array('TARGET' => 'column_31', 'H_SLA' => 'column_12', 'INC' => 'column_02', 'A_SLA' => 'column_07'); // < HR BERECHNUNG 20 >
$GLOBALS['SLA']['TYP']['HR_STERN'] = array('TARGET' => 'column_32', 'H_SLA' => 'column_12', 'INC' => 'column_02', 'A_SLA' => 'column_08'); // < HR BERECHNUNG Stern >
// ---== SERVICES : ABANDONED RATE BERECHNUNG ==---
$GLOBALS['AR']['TYP']['AR_30'] = array('TARGET' => 'column_27', 'A_SLA' => 'column_09', 'INC' => 'column_02'); // < AR BERECHNUNG 30 >
$GLOBALS['AR']['TYP']['AR_20'] = array('TARGET' => 'column_28', 'A_SLA' => 'column_10', 'INC' => 'column_02'); // < AR BERECHNUNG 30 >
$GLOBALS['AR']['TYP']['AR_STERN'] = array('TARGET' => 'column_29', 'A_SLA' => 'column_11', 'INC' => 'column_02'); // < AR BERECHNUNG 30 >
// ---== SERVICES: TENDENZ FÜR SLA's ==---
$GLOBALS['TENDENCY_FIELDS']['SERVICES'] = array('column_19', 'column_20', 'column_21');
$GLOBALS['TENDENCY_FIELDS']['QUEUE'] = array('column_03', 'column_04', 'column_05');
$GLOBALS['TENDENCY_CONTAINER'] = array('SERVICES', 'QUEUE');


// --=== CONTAINER UHRZEIT : FORMATE ===--
$GLOBALS['UHR']['FORMAT']['de'] = 'H:i:s';
$GLOBALS['UHR']['FORMAT']['en'] = 'h:i:s a';


// --=== DEFAULT THEME COLORS ===--
$GLOBALS['THEME']['DEFAULT']['THEME_NAME'] = 'GLOBAL THEME';
$GLOBALS['THEME']['DEFAULT']['HEADER_IMAGE'] = 'BLACK';
$GLOBALS['THEME']['DEFAULT']['BODY_BGCOLOR_HEX'] = '#FFFFFF';
$GLOBALS['THEME']['DEFAULT']['TBL_HEADER_BGCOLOR_HEX'] = '#EDEDED';
$GLOBALS['THEME']['DEFAULT']['TBL_HEADER_COLOR_HEX'] = '#000000';
$GLOBALS['THEME']['DEFAULT']['TBL_STRAIGTH_ROW_BGCOLOR_HEX'] = '#EBE9ED';
$GLOBALS['THEME']['DEFAULT']['TBL_STRAIGTH_ROW_COLOR_HEX'] = '#000000';
$GLOBALS['THEME']['DEFAULT']['TBL_ODD_ROW_BGCOLOR_HEX'] = '#FFFFFF';
$GLOBALS['THEME']['DEFAULT']['TBL_ODD_ROW_COLOR_HEX'] = '#000000';
$GLOBALS['THEME']['DEFAULT']['TBL_BORDER_COLOR_HEX'] = '#000000';
