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

{block name="zPageTitle" append}: {DABASE}{/block}

{block name="zContent" append}
    <div class="whiteBack rad-15 pad-20 font-16">
        {assign var=all value=zDB::get()->all()}
        <table class="zTable" no_sort="2-3">
            <thead>
                <tr>
                    <th>{zThis z="Table"}</th>
                    <th>{zThis z="Number of Rows"}</th>
                    <th>{zThis z="Edit"}</th>
                    <th>{zThis z="Delete"}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$all key=rowN item=table}
                    {assign var=tableIn value=zDB::get()->table($table[0])}
                    <tr>
                        <td>{$table[0]}</td>
                        <td>{$tableIn|count}</td>
                        <td>
                            <a href="{$zContent->srcFull["_main"]}_admin/advanced/database/table/index.php?table={$table[0]}" class="zButton zHov-zShadow5 primary sweet">
                                 {zThis z="Edit"}
                            </a>
                        </td>
                        <td>
                            {if $table[0]|in_array:$defaultTables}{else}
                                {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
                                    _mButton={zThis z="Delete"}
                                    _mForm=$zContent->base_uri
                                    _mLabel=$rowN
                                    _mHidden="<input type='text' name='table_name' value='{$table[0]}'>"
                                    _mTitle={zThis z="Delete Table"}
                                    _mContent={zThis z="Are you sure you want to delete this table?"}
                                }
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}
