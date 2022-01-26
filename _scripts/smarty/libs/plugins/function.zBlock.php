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
function smarty_function_zBlock($params, Smarty_Internal_Template $template)
{
    $zPage = $template->smarty->tpl_vars["zPage"]->value;
    $zContent = $template->smarty->tpl_vars["zContent"]->value;
    $holders = $zPage->zPageGetHolders($zContent->language->id, $params["ID"]);

    $result = "";

    foreach ($holders as $holder) {
        for ($x = 0; $x <= 2; $x++) {
            $val = $template->smarty->tpl_vars["_" . $x]->value;

            if (isset($val) && $val !== "") {
                $template->smarty->assign("_" . $x, null);
            }
        }
        foreach ($holder->partials as $key => $partial) {
            $template->smarty->assign("_" . ($key+1), $partial["content"]);
        }
        $result = $result . $template->smarty->display("_holders/".$holder->id."/_holder.tpl");
    }

    return $result;
}
