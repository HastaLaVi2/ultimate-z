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
function smarty_function_zPageUrl($params, Smarty_Internal_Template $template)
{
    $zContent = $template->smarty->tpl_vars["zContent"]->value;
    $zPageTools = $template->smarty->tpl_vars["zPageTools"]->value;

    return $zContent->srcFull["_main"] . ltrim($zPageTools->zPageGetPageUrl($params["ID"], $zContent->language->id), "/");
}
