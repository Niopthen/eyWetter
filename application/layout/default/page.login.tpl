{* Login Mask *}

<div id="login-panel" align="center">
	<div id='login_header'>{#LoginWindowHeader#}</div>
	<div id='login_header_hinweis'>{#LoginWindowHeaderHinweis#}</div>

	<form id="loginForm" action="index.php"  method="Post">
		<input type="hidden" name="MODUL" value="LOGIN">
		<p></p>	
		<p>
			<label class="loginForm">{#LoginName#}</label><br/>
			<input id="LOGIN_NAME" name="LOGIN_NAME" value="" />
		</p>
		<p>
			<label class="loginForm">{#UserPassword#}</label><br/>
			<input type="password" id="PASSWORD" name="PASSWORD" value=""/>
		</p>
		<p>
			<input id='login_button' class="submit" type="submit" value="{#LoginWindowBtn#}"/>
		</p>
	</form>

	<div style='clear: both'></div>
	<div id='mylinie'>&nbsp;</div>
	<div id='neue_nutzer_header'>{#LoginWindowNeueNutzerHeader#}</div>
	<div id='neue_nutzer_text'>{#LoginWindowNeueNutzerText#}</div>

</div>