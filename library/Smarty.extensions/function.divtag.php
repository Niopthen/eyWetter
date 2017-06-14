<?php

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty plugin
 *
 * Type:     function
 * Name:     divtag
 * Date:     Mai 17, 2006
 * Purpose:  return div tag with style
 * Input:
 *         - params = style variables

 * Example:  {divtag $params}
 * @link
 *
 * @version  1.0
 * @author Niopthen
 * @param array
 * @return string
 */
function smarty_function_divtag($params)
{
	$poss_params = array ("height", "width", 'clear');

	$divtag = "<div style=\"";

	foreach ($params as $key => $value)
	{
		if (in_array($key, $poss_params))
		{
			$divtag .= $key . ":" . $value . ";";
		}
	}
	$divtag .= "\"></div>";
	return $divtag;

}

/* vim: set expandtab: */