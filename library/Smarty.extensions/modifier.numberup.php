<?php

/*
 *
 * ===============================================
 * Name: Smarty {numberup} modifier plugin
 * ===============================================
 * Beschreibung:
 * setze die im String enthaltenen Nummern mittels
 * des HTML Tag nach oben
 *
 * ===============================================
 *
 * Type:     modifier
 * Name:     numberup
 * Purpose:  Make numbes up
 * Input:
 *         - var = string to changev
 *
 *
 * $Author$
 * $LastChangedDate$
 * $LastChangedBy$
 * $Id$
 * $Revision$
 *
 */


function smarty_modifier_numberup($string)
{
	if (!is_array($string))
	{
		$last = '';
		$retVal = '';
		for ($x = 0; $x <= (strlen($string) - 1); $x++)
		{
			$Sign = substr($string, $x, 1);
			if (is_numeric($Sign))
			{
				if (!$last == 'INT')
				{
					$retVal .= "<sup><span class='UpperNumbers'>" . $Sign;
				}
				else
				{
					$retVal .= $Sign;
				}

				$last = 'INT';
			}
			else
			{
				if ($last == 'INT')
				{
					$retVal .= '</span></sup>' . $Sign;
					$last = '';
				}
				else
				{
					$retVal .= $Sign;
				}
			}
		}
		if ($last == 'INT')
		{
			$retVal .= '</span></sup>';
		}
	}
	$retVal = $retVal == '' ? $string : $retVal;
	return $retVal;

}