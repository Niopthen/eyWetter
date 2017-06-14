<?php

/*
 *
 * ===============================================
 * Name: config.sql_querys.php
 * ===============================================
 * Beschreibung:
 * Vordefiniert SQL Querys als Konstanten mit Platzhaltern
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

// --=== Melde den Nutzer an / (manuell und thinclient)  ===---
$db_LoginUser = "SELECT * FROM v_res_user_acl_user WHERE user_id = '<[USER_ID]>' AND icymon_login = 1";
define('DB_LOGIN_USER', $db_LoginUser);
$GLOBALS['DEBUG']['SQL']['DB_LOGIN_USER'] = FALSE;


// --=== Prüfe ob es ein ThinClient ist ===--
$db_IsThinClient = "SELECT * FROM v_res_asset_netw_display_loc WHERE ip_address = '<[IP_ADDRESS]>'";
define('DB_IS_THIN_CLIENT', $db_IsThinClient);
$GLOBALS['DEBUG']['SQL']['DB_IS_THIN_CLIENT'] = FALSE;

// --=== Hole mir spezeille Daten für den ThinClient ===--
$db_GetSomeThinClientDaten = "SELECT display_id, amedis_code, monitor_number FROM v_res_asset_netw_display_loc WHERE ip_address = '<[IP_ADDRESS]>'";
define('DB_GET_SOME_THIN_CLIENT_DATEN', $db_GetSomeThinClientDaten);
$GLOBALS['DEBUG']['SQL']['DB_GET_SOME_THIN_CLIENT_DATEN'] = FALSE;

// --=== Hole Notify Messages ===--
$db_NotifyDefaultMessage = "SELECT * FROM res_text WHERE text_name = '<[DEFAULT_SYSTEM_MESSAGE]>' AND text_lang = '<[MESSAGE_LANGUAGE]>'";
define('DB_NOTIFY_DEFAULT_MESSAGE', $db_NotifyDefaultMessage);
$GLOBALS['DEBUG']['SQL']['DB_NOTIFY_DEFAULT_MESSAGE'] = FALSE;


$db_NotifyMessage = "SELECT * FROM res_text WHERE text_name = '<[NOTIFY_KEY]>' AND text_lang = '<[MESSAGE_LANGUAGE]>'";
define('DB_NOTIFY_MESSAGE', $db_NotifyMessage);
$GLOBALS['DEBUG']['SQL']['DB_NOTIFY_MESSAGE'] = FALSE;


// --=== Ermittle die Container Namen ===--
$db_GetContainerNamen = "SELECT container_id, container_name FROM icm_container_name";
define('DB_GET_CONTAINER_NAMEN', $db_GetContainerNamen);
$GLOBALS['DEBUG']['SQL']['DB_GET_CONTAINER_NAMEN'] = FALSE;


// --=== Language ID ===--
$db_GetLanguageID = "SELECT language_id FROM res_language WHERE language_name = '<[LANGUAGE_NAME]>'";
define('DB_GET_LANGUAGE_ID', $db_GetLanguageID);
$GLOBALS['DEBUG']['SQL']['DB_GET_LANGUAGE_ID'] = FALSE;


// --=== FAQ Daten ===--
$db_GetFAQ = "SELECT * FROM icm_faq WHERE visible=1 ORDER BY sort_order";
define('DB_GET_FAQ', $db_GetFAQ);
$GLOBALS['DEBUG']['SQL']['DB_GET_FAQ'] = FALSE;


// --=== Theme Daten ===--
$db_GetTheme = "SELECT * FROM v_icm_theme_display_colors WHERE theme_id = <[THEME_ID]>";
define('DB_GET_THEME', $db_GetTheme);
$GLOBALS['DEBUG']['SQL']['DB_GET_THEME'] = FALSE;


// --=== Get Tresholds Daten ===--
$db_GetTresholds = "SELECT container_name, container_label, display_container_prop_id, display_column, color_marks, color_mark_treshold_yellow, color_mark_treshold_red, alarm_treshold_yellow, alarm_treshold_red FROM v_icm_displ_cont_col_rt_prop WHERE (display_id = <[DISPLAY_ID]> AND color_marks >= 1)";
define('DB_GET_TRESHOLDS', $db_GetTresholds);
$GLOBALS['DEBUG']['SQL']['DB_GET_TRESHOLDS'] = FALSE;


// --=== Get Field Formats ===--
$db_GetFieldFormats = "SELECT display_container_prop_id, display_column, format_option FROM v_icm_displ_cont_col_rt_prop WHERE (display_id = <[DISPLAY_ID]> AND format_option IS NOT NULL)";
define('DB_GET_FIELDFORMATS', $db_GetFieldFormats);
$GLOBALS['DEBUG']['SQL']['DB_GET_FIELDFORMATS'] = FALSE;


// --=== Get Group Data ===--
$db_GetGroupData = "SELECT container_name, display_container_prop_id, display_column FROM v_icm_displ_cont_col_rt_prop WHERE (display_id = <[DISPLAY_ID]> AND group_by_flag=1)";
define('DB_GET_GROUP_DATA', $db_GetGroupData);
$GLOBALS['DEBUG']['SQL']['DB_GET_GROUP_DATA'] = FALSE;


// --=== Check Survival ===--
$db_CheckSurvival = "SELECT * FROM v_acm_survival_mode_location WHERE (location_numbercode = <[LOCATION_NUMBERCODE]> AND amedis_code='<[AMEDIS_CODE]>' AND lsp_active_flag=1)";
define('DB_CHECK_SURVIVAL', $db_CheckSurvival);
$GLOBALS['DEBUG']['SQL']['DB_CHECK_SURVIVAL'] = FALSE;


// --=== Check Maintenance ===--
$db_CheckMaintenance = "SELECT server_url, server_name, enabled FROM icm_server WHERE enabled = 2 AND server_url = '<[SERVER_URL]>' AND server_name LIKE '<[AMEDIS_CODE]>%'";
define('DB_CHECK_MAINTENANCE', $db_CheckMaintenance);
$GLOBALS['DEBUG']['SQL']['DB_CHECK_MAINTENANCE'] = FALSE;


// --=== Check Browser Instanz ===--
$db_CheckBrowserInstanz =
	"SELECT * FROM res_session WHERE  session_id = '<[SESSION_ID]>' AND ip_address = '<[IP_ADRESS]>'";
define('DB_CHECK_BROWSER_INSTANZ', $db_CheckBrowserInstanz);
$GLOBALS['DEBUG']['SQL']['DB_CHECK_BROWSER_INSTANZ'] = FALSE;


// --=== Display Container ===--
$db_GetDisplayContainer =
	"SELECT cont.container_name, prop.header_visible, prop.container_label, prop.display_id, prop.container_id,  prop.visible, prop.font_size, prop.refresh_interval, prop.container_order, prop.container_alignment, prop.display_filter_id, prop.display_container_prop_id FROM icm_display_container_prop prop inner join icm_container_name cont on cont.container_id = prop.container_id WHERE prop.display_id = <[DISPLAY_ID]> AND prop.visible = 1 ORDER BY prop.container_order";
define('DB_GET_DISPLAY_CONTAINER', $db_GetDisplayContainer);
$GLOBALS['DEBUG']['SQL']['DB_GET_DISPLAY_CONTAINER'] = FALSE;



// --=== Get Status Colors ===--
$db_GetStatusColors = "SELECT container_name, column_alias,	font_color_hex, backgr_color_hex, language_id, display_value FROM v_icm_displ_val_status_colors	WHERE language_id = <[LANGUAGE_ID]>";
define('DB_GET_STATUS_COLORS', $db_GetStatusColors);
$GLOBALS['DEBUG']['SQL']['DB_GET_STATUS_COLORS'] = FALSE;



// --=== Get Default Filter ===--
$db_GetDefaultFilter = "SELECT filter_parameter_type_name, filter_parameter_default FROM icm_display_filt_par_type";
define('DB_GET_DEFAULT_FILTER', $db_GetDefaultFilter);
$GLOBALS['DEBUG']['SQL']['DB_GET_DEFAULT_FILTER'] = FALSE;


// --=== Get Avail Licenes ===--
$db_GetAvailLicenses = "SELECT ip_address FROM res_session WHERE user_id = '<[USER_ID]>'";
define('DB_GET_AVAIL_LICENSES', $db_GetAvailLicenses);
$GLOBALS['DEBUG']['SQL']['DB_GET_AVAIL_LICENSES'] = FALSE;


// --=== Get Container Query ===--
$db_GetContainerQuery = "SELECT ad.container_name as ContainerName, main.container_header_query as HeaderQuery, main.container_data_query as DatenQuery FROM icm_container_query main, icm_container_name ad where main.container_name_id = ad.container_id";
define('DB_GET_CONTAINER_QUERY', $db_GetContainerQuery);
$GLOBALS['DEBUG']['SQL']['DB_GET_CONTAINER_QUERY'] = FALSE;


// --=== ThinClient Access ===--
$db_ThinClientAccess =
	"SELECT count(*) FROM acl_user u
left outer join acl_user_group_rt ugrt on ugrt.user_id = u.user_id
inner join acl_accessdata ad on (ad.group_id = ugrt.group_id or ad.group_id = u.group_id) and ad.type_id = 1
inner join acl_node n on n.node_id = ad.node_id and n.node_name = 'icymon.icm_display'
inner join icm_display icmd on icmd.display_id between ad.id_from and ad.id_to
WHERE
u.user_id = '<[THINCLIENT_USER_ID]>'
AND
icmd.display_id = <[DISPLAY_ID]>";
define('DB_THIN_CLIENT_ACCESS', $db_ThinClientAccess);
$GLOBALS['DEBUG']['SQL']['DB_THIN_CLIENT_ACCESS'] = FALSE;

// --=== Get Filter By Display ===--
$db_GetFilterByDisplay =
	"SELECT
u.user_id,
icmd.display_id,
icmd.display_name,
icmcp.display_container_prop_id,
icmdf.display_filter_id,
icmdf.display_filter_name,
icmdfpt.filter_parameter_type_name,
icmdfp.filter_parameter_value

from
acl_user u
left outer join acl_user_group_rt ugrt on ugrt.user_id = u.user_id
inner join acl_accessdata ad on (ad.group_id = ugrt.group_id or ad.group_id = u.group_id) and ad.type_id = 1
inner join acl_node n on n.node_id = ad.node_id and n.node_name = 'icymon.icm_display'
inner join icm_display icmd on icmd.display_id between ad.id_from and ad.id_to
inner join icm_display_container_prop icmcp on icmcp.display_id = icmd.display_id
left outer join icm_display_filter icmdf on icmdf.display_filter_id = icmcp.display_filter_id
left outer join icm_display_filter_param icmdfp on icmdfp.display_filter_id = icmcp.display_filter_id
left outer join icm_display_filt_par_type icmdfpt on icmdfpt.filter_parameter_type_id = icmdfp.filter_parameter_type_id

where
u.user_id = '<[USER_ID]>' AND
icmd.display_id = <[DISPLAY_ID]>

group by
u.user_id,
icmd.display_id,
icmd.display_name,
icmcp.display_container_prop_id,
icmdf.display_filter_id,
icmdf.display_filter_name,
icmdfpt.filter_parameter_type_name,
icmdfp.filter_parameter_value
";
define('DB_GET_FILTER_BY_DISPLAY', $db_GetFilterByDisplay);
$GLOBALS['DEBUG']['SQL']['DB_GET_FILTER_BY_DISPLAY'] = FALSE;


// --=== Set Sort Order ===--
$db_SetSortOrder =
	"SELECT display_container_prop_id as DisplayContainerPropID, display_column as DisplayColumn, container_name as ContainerName, user_defined_sort_direction as SortDirection
	FROM v_icm_displ_cont_col_rt_prop WHERE (display_id = <[DISPLAY_ID]> AND user_defined_sort_order IS NOT NULL) ORDER BY user_defined_sort_order";
define('DB_SET_SORT_ORDER', $db_SetSortOrder);
$GLOBALS['DEBUG']['SQL']['DB_SET_SORT_ORDER'] = FALSE;


// --=== Hole mir alle Displays ===---
$db_GetAllDisplays =
	"
select
u.user_id,
icmd.display_id,
icmd.display_name,
icmd.language_id,
icmd.page_division_container_width,
icmd.theme_id,
icmd.tendency_period,
icmd.clock_format

from
acl_user u

left outer join acl_user_group_rt ugrt on ugrt.user_id = u.user_id
inner join acl_accessdata ad on (ad.group_id = ugrt.group_id or ad.group_id = u.group_id) and ad.type_id = 1
inner join acl_node n on n.node_id = ad.node_id and n.node_name = 'icymon.icm_display'
inner join icm_display icmd on icmd.display_id between ad.id_from and ad.id_to

where
u.user_id = '<[USER_ID]>'

group by

u.user_id,
icmd.display_id,
icmd.display_name,
icmd.page_division_container_width,
icmd.theme_id,
icmd.tendency_period

order by
icmd.display_name
";

define('DB_GET_ALL_DISPLAYS', $db_GetAllDisplays);
$GLOBALS['DEBUG']['SQL']['DB_GET_ALL_DISPLAYS'] = FALSE;



// --=== Hole mir ein bestimmtes Display ===--
$db_GetSingleDisplay =
	"
select
u.user_id,
icmd.display_id,
icmd.display_name,
icmd.language_id,
icmd.page_division_container_width,
icmd.theme_id,
icmd.tendency_period,
icmd.clock_format

from
acl_user u

left outer join acl_user_group_rt ugrt on ugrt.user_id = u.user_id
inner join acl_accessdata ad on (ad.group_id = ugrt.group_id or ad.group_id = u.group_id) and ad.type_id = 1
inner join acl_node n on n.node_id = ad.node_id and n.node_name = 'icymon.icm_display'
inner join icm_display icmd on icmd.display_id between ad.id_from and ad.id_to

where
u.user_id = '<[USER_ID]>' and icmd.display_id =<[DISPLAY_ID]>

group by

u.user_id,
icmd.display_id,
icmd.display_name,
icmd.page_division_container_width,
icmd.theme_id,
icmd.tendency_period

order by
icmd.display_name
";

define('DB_GET_SINGLE_DISPLAY', $db_GetSingleDisplay);
$GLOBALS['DEBUG']['SQL']['DB_GET_SINGLE_DISPLAY'] = FALSE;
?>