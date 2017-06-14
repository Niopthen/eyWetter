{* PAGE Header Template *}

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<html>
    <head><title>IcyMon</title>
        <meta HTTP-EQUIV='content-type' CONTENT='text/html; charset=UTF-8' />
        <meta NAME='author' CONTENT='Niopthen' />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="cache-control" content="no-store" />
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="must-revalidate" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="pragma" content="no-cache" />

        <meta NAME='robots' CONTENT='NOINDEX, NOFOLLOW' />
        <meta NAME='copyright' CONTENT='Niopthen' />
        <meta NAME='GENERATOR' CONTENT='Netbeans, Notepad++' />
        <meta NAME='date' CONTENT='{$smarty.const.APP_STRING}' />

		{* Lade CSS Dateinen *}
		<link href='{$smarty.const.CSS}default.css' rel='stylesheet' type='text/css'>

		{* JS Bibliotheken und Funktionen *}
			<script type='text/javascript' src='{$smarty.const.JS}jquery{$smarty.const.DIRECTORY_SEPARATOR}jquery-3.2.1.min.js'></script>
			<script type='text/javascript' src='{$smarty.const.JS}nosource.js'></script>

        {* Language *}
		{if $smarty.session.TMP.LANGUAGE ne 'en' && file_exists("{$smarty.const.JS_PLUGINS}validate{$smarty.const.DIRECTORY_SEPARATOR}messages_{$smarty.session.TMP.LANGUAGE}.js")}
			<script type='text/javascript' src='{$smarty.const.JS_PLUGINS}validate{$smarty.const.DIRECTORY_SEPARATOR}messages_{$smarty.session.TMP.LANGUAGE}.js'></script>
		{/if}

		{* JS Eigene Funktionen welche beim Start benötigt werden *}
		{* <script type='text/javascript' src='{$smarty.const.JS}default.js'></script> *}

	</head>
	<body>
		<div id='overlay' style='display: none;'></div>