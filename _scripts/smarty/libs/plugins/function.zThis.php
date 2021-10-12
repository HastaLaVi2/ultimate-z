<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.eightball.php
 * Type:     function
 * Name:     eightball
 * Purpose:  outputs a random magic answer
 * -------------------------------------------------------------
 */
function smarty_function_zThis($params, Smarty_Internal_Template $template)
{
    $allTranslations = $template->smarty->tpl_vars["zThis"]->value;

    return $allTranslations[$params["z"]] ? $allTranslations[$params["z"]] : $params["z"];
}
