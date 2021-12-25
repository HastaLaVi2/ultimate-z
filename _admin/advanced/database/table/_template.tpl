{**
 * Copyright since 2021 the ultimate z and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@theultimatez.com so we can send you a copy immediately.
 *
 *}

{extends file="_main.tpl"}

{block name="zTop" append}
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/simple-datatables/style.css">
{/block}

{block name="zPageTitle" append}: {$smarty.get.table}{/block}

{block name="zContent" append}
    <nav>
        <ol class="cleanList">
            <li><a href="{zPageUrl ID="13"}" class="inLine font-16">
                <i class="fas fa-caret-left"></i>
                {zPageName ID="13"}
            </a></li>
        </ol>
    </nav>

    <div class="whiteBack rad-15 pad-20 font-16">
        {$zTools->zToolsFormWarning($success, $error)}
        {assign var=tableIn value=zDB::get()->table({$smarty.get.table})}
        {assign var=primaryKey value=zDB::get()->primaryKey({$smarty.get.table})}
        <table class="zTable">
            <thead>
                <tr>
                    {foreach from=$tableIn key=rowN item=row}
                        {if $rowN == "0"}
                            {foreach from=$row key=title item=i}
                                <th>{$title}</th>
                            {/foreach}
                        {/if}
                    {/foreach}
                    <th class="zEdit">{zThis z="Edit"}</th>
                    <th class="zDelete">{zThis z="Delete"}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$tableIn key=rowN item=row}
                    <tr>
                        {assign var=editValue value=""}
                        {foreach from=$row key=key item=value}
                            {if $key == $primaryKey}
                                {assign var=keyValue value=$value}
                            {/if}
                            {assign
                                var=editValue
                                value="{$editValue}
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='{$key}'>
                                        {$key}
                                    </label>
                                    {if $value|count_characters:true > 200}
                                        <textarea name='{$key}' class='top-0 bottom-0 pad-10' style='min-height: 200px'>{$value}</textarea>
                                    {else}
                                        <input type='text' name='{$key}' class='top-0 bottom-0 pad-10' value='{$value}'>
                                    {/if}
                                </div>"
                            }
                            <td>{$value|escape:'htmlall'|substr:0:200}{if $value|count_characters:true > 200}...{/if}</td>
                        {/foreach}
                        <td class="zEdit">
                            {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
                                _mButton={zThis z="Edit"}
                                _mSubmit={zThis z="Save"}
                                _mForm=$zContent->base_uri
                                _mLabel=$rowN
                                _mHidden="<input type='text' name='type' value='edit_row'><input type='text' name='key' value='{$primaryKey}'><input type='text' name='keyValue' value='{$keyValue}'>"
                                _mTitle={zThis z="Edit Row"}
                                _mContent="{$editValue}"
                            }
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}

{block name="zBottom" append}
    <script>
    var entriesPerPage = "{zThis z="entries per page"}";
    var searchOn = "{zThis z="Search..."}";
    var showingOf = "{zThis z="Showing [start] to [end] of [rows] entries"}";
    showingOf = showingOf.replaceAll("[", "{literal}{{/literal}").replaceAll("]", "{literal}}{/literal}");
    var noRowFound = "{zThis z="No entries found"}";

    $("input[type=checkbox]").change(function() {
        var clas = $(this).attr("class").split(" ")[1];
        var checked = $(this).prop("checked");
        $("."+clas).prop("checked", checked);
    });
    </script>
    <script src="{$zContent->srcFull["scripts"]}/simple-datatables/simple-datatables.js"></script>
    <script>
    {literal}
        function zPageJS() {
            // Simple Datatable
            let tables = document.querySelectorAll(".zTable");
            tables.forEach((item, i) => {
                let dataTable = new simpleDatatables.DataTable(item, {
                    columns: [
                        {select: [{/literal}{count($tableIn[0])}, {count($tableIn[0])+1}{literal}], sortable: false},
                    ]
                });
            });
            zDetect();
        }
    {/literal}
    zPageJS();
    </script>
{/block}
