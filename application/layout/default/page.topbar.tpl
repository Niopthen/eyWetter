{* Page Topbar *}

<div id='topbar' class='topbar_weiss'>

	{* Buttons *}
	<div id='button_area'>
		<table id='tbl_buttons'>
			<tr>
				<td id='available_displays' class='available_displays_weiss'>{#ButtonDisplays#}</td>
				<td>{html_image file="{$smarty.const.IMG}1x1_transparent.gif" width='5px'}</td>
				<td id='user_id' class='user_weiss'>{$smarty.session.ACCOUNT.user_id}</td>
			</tr>
		</table>
	</div>
</div>


{* Versteckte Informationen *}
<div id='user_daten_window' style='display:none'>
	<div id='user_daten_header'>
		<div id='user_daten_header_text'>{#UserDaten#}</div>
		<div id='window_close_user_daten'>{#CloseWindow#}</div>
	</div>
	<div id='user_daten'>
		<div id='user_daten_name'>{$smarty.session.ACCOUNT.user_name}</div>
		<div id='user_daten_email'>{$smarty.session.ACCOUNT.email_address}</div>
		<div id='user_daten_line'><hr></div>
			{divtag height='5px'}
		<div id='user_logoff'>{#LogOut#}</div>
		{divtag height='10px'}
		<div id='release_string'>{$smarty.const.APP_STRING}</div>
	</div>
</div>