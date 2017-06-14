<?php

/*
 *
 * ===============================================
 * Name: Smarty {array_unique} function plugin
 * ===============================================
 * Beschreibung:
 * Wende die PHP Funktion array_unique an
 *
 * ===============================================
 *
 * Type:     function
 * Name:     array_unique
 * Purpose:  make a array unique
 * Input:
 *         - array = the given array
 * 		   - assign = the name of the Array the Value will be given back
 *
 * Example:
 * {array_unique array=$foo assign="bar"}
 * 
 * Author: Niopthen
 * Version 0.1
 *
 */

function smarty_function_array_unique($params, &$smarty)
{


// Überprüfe ob alle Variablen Übergeben wurden
    if (!isset($params['array']))
    {
        $smarty->trigger_error('array_unique: missing array parameter');
        return;
    }
    if (!is_array($params['array']))
    {
        $smarty->trigger_error('array_unique: array is not an array');
        return;
    }

    if (empty($params['assign']))
    {
        $smarty->trigger_error("array_unique: missing assign parameter");
        return;
    }

    $value = array_unique($params['array']);
    $smarty->assign($params['assign'], $value);

    return;
}
