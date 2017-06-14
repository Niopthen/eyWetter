<?php

/*
 *
 * ===============================================
 * Name: Smarty {timeformat} modifier plugin
 * ===============================================
 * Beschreibung:
 * setze die im String enthaltenen Nummern mittels
 * des HTML Tag nach oben
 *
 * ===============================================
 *
 * Type:     modifier
 * Name:     timeformat
 * Purpose:  kuerze mir den hh:mm:ss String auf mm:ss
 * Input:
 *         - var = string to change
 *
 *
 * Author: Thomas Sünkel
 *
 */


function smarty_modifier_timeformat($string, $FormatID)
{
	$mypattern = "/^([0-9]{2,4}):([0-9]{2}):([0-9]{2})/";
	$retVal = $string;
	if ($FormatID == 1)
	{
		if (preg_match($mypattern, $string))
		{
			$hms = explode(':', $string);
			if (count($hms) == 3)
			{
				$minutes = ($hms[0] * 60) + $hms[1];
				if ($minutes == 0)
					$minutes = '00';

				$retVal = $minutes . ':' . $hms[2];
			}
		}
	}

	return $retVal;

}