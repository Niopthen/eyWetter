<?php

/*
 *
 * ===============================================
 * Name: Smarty {treshold} function plugin
 * ===============================================
 * Beschreibung:
 * Ermittle mir anhand der Treshold
 * den Farbtyp GREEN/YELLOW/RED
 *
 * ===============================================
 *
 * Type:     function
 * Name:     treshold
 * Purpose:  Get ColorCode by Treshold (GREEN/YELLOW/RED)
 * Input:
 *         - var = variable to test
 *         - yellow = the value of the yellow treshold
 *         - red = the value of the red treshold
 * 		   - assign = the name of the ColorCode Variable
 *
 * Example:
 * {treshold var=$foo yellow=$yellow_var red=$red_var assign="bar"}
 *
 * $Author: Niopthen
 */

function smarty_function_treshold($params, &$smarty)
{
    // Überprüfe ob alle Variablen Übergeben wurden
    if (!isset($params['var']))
    {
        $smarty->trigger_error('treshold: missing var parameter');
        return;
    }

    if (empty($params['assign']))
    {
        $smarty->trigger_error("treshold: missing assign parameter");
        return;
    }

    if (!isset($params['yellow']))
    {
        $smarty->trigger_error('treshold: missing yellow parameter');
        return;
    }

    if (!isset($params['red']))
    {
        $smarty->trigger_error('treshold: missing red parameter');
        return;
    }
    // übersetze und normiere die yellow, red parameter
    $var = $params['var'];
    $yellow = $params['yellow'] == '' ? 0 : $params['yellow'];
    $red = $params['red'] == '' ? 0 : $params['red'];

    // prüfe ob der yellow Parameter kleiner oder größer als der red Parameter ist
    $normal_check = $red > $yellow ? TRUE : FALSE;

    // prüfe ob es sich bei dem Parameter um eine Uhrzeit handelt und wenn ja dann wandle sie in einen Timestamp um
    if (ereg("^[0-2][0-9]:[0-5][0-9]:[0-5][0-9]$", $var))
    {
        $h = substr($params['var'], 0, 2);
        $m = substr($params['var'], 3, 2);
        $s = substr($params['var'], 6, 2);
        $var = $h * 60 * 60 + $m * 60 + $s;
    }

    // prüfe die schwellen und setze den ColorCode

    if ($normal_check == FALSE)
    {
        if ($var > $yellow)
        {
            $smarty->assign($params['assign'], 'GREEN');
        }
        elseif ($var > $red)
        {
            $smarty->assign($params['assign'], 'YELLOW');
        }
        else
        {
            $smarty->assign($params['assign'], 'RED');
        }
    }
    else
    {
        if ($var >= $red)
        {
            $smarty->assign($params['assign'], 'RED');
        }
        elseif ($var >= $yellow)
        {
            $smarty->assign($params['assign'], 'YELLOW');
        }
        else
        {
            $smarty->assign($params['assign'], 'GREEN');
        }
    }

    return;
}
