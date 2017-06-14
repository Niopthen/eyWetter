{* DEBUGGER *}
<div id='DEBUGGER' style='cursor: pointer; font-weight: bold; padding-left: 10px; padding-top: 20px;'> >>> DEBUGGER</div>
<div id='DEBUGGER_DATA' style='display: none; background-color: greenyellow; overflow: scroll'>
{$DEBUGGER}
</div>
<div id='DEBUGGER_DATA_AJAX' style="display: none; background-color: greenyellow;"></div>

<script type="text/javascript"> 
	
	$(document).ready(function()
{
	$('#DEBUGGER').click(function()
	{
		$('#DEBUGGER_DATA').toggle();
	}
)
}
)
</script>