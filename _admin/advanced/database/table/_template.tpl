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
        <table class="zTable" no_sort="{count($tableIn[0])}-{count($tableIn[0])+1}">
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
                            {assign var=dataType value=zDB::get()->dataType($smarty.get.table, $key)}
                            {assign
                                var=editValue
                                value="{$editValue}
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='{$key}'>
                                        {$key}
                                    </label>
                                    {if $dataType == "text"}
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
        function submitForm() {
            $(".zForm").submit(function(e) {
                e.preventDefault();
                var post_url = $(this).attr("action");
                var post_data = $(this).serialize();

                var json = $(this).serializeArray();
                var final = {};
                $.map(json, function(n, i){
                    final[n["name"]] = n["value"];
                });

                console.log(final);

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000
                        }).showToast();
                    },
                    error: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    },
                });
            });
        }
        function zPageJS() {
            submitForm();
            window.zTables.forEach((item, i) => {
                item.on("datatable.page", function(page) {
                    submitForm();
                });
                item.on("datatable.sort", function(column, direction) {
                    submitForm();
                });
            });
        }
    </script>
{/block}
