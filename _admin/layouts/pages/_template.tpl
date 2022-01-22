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

{block name="zContent" append}
    <div class="col-12">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Page List"}</h4>
            {$zTools->zToolsFormWarning($success1, $error1)}
            <a href="{$zContent->srcFull["_main"]}_admin/layouts/pages/create/" class="zButton zHov-zShadow5 primary sweet font-16">
                <i class="fas fa-plus-square right-10"></i>
                {zThis z="Add New Page"}
            </a>
            <div class="top-20"></div>
            <table class="zTable" no_sort="3-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{zThis z="Name"}</th>
                        <th>{zThis z="Template"}</th>
                        <th>{zThis z="Edit"}</th>
                        <th>{zThis z="Delete"}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$zPageTools->zPageGetAll($zUser->id_lang_closest, "front") item=page}
                        <tr id="zPage-{$page->id}">
                            <td>{$page->id-1000}</td>
                            <td>{$page->name}</td>
                            <td>{$page->template->name}</td>
                            <td>
                                <a href="{$zContent->srcFull["_main"]}_admin/layouts/pages/edit/index.php?id_page={$page->id}" class="zButton zHov-zShadow5 primary sweet">
                                     {zThis z="Edit"}
                                </a>
                            </td>
                            <td>
                                {if $page->id !== "1001"}
                                {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
                                    _mButton={zThis z="Delete"}
                                    _mForm=$zContent->base_uri
                                    _mLabel=$page->id
                                    _mHidden="<input name='id_page' value='{$page->id}'>"
                                    _mTitle={zThis z="Delete Page"}
                                    _mContent={zThis z="Are you sure you want to delete this page?"}
                                }
                                {/if}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
{/block}

{block name="zBottom" append}
    <script>
        function deleteFromTable(dataTable) {
            // delete form functions
            $(".zForm").submit(function(e) {
                e.preventDefault();

                window.location.assign("#");
                var form = $(this).clone();
                var id_page = form.find("input[name='id_page']").val();
                var obj_page = $("#zPage-"+id_page);
                var post_url = form.attr("action");
                var post_data = form.serialize();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        obj_page.remove();
                        dataTable.rows().remove(obj_page[0].dataIndex);
                        dataTable.update();
                        deleteFromTable(dataTable);
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
            window.zTables.forEach((item, i) => {
                item.on("datatable.page", function(page) {
                    $("#zContent").find("a").click(magicLinks);
                    deleteFromTable(item);
                });
                item.on("datatable.sort", function(column, direction) {
                    $("#zContent").find("a").click(magicLinks);
                    deleteFromTable(item);
                });
            });
            deleteFromTable(window.zTables[0]);
        }
    </script>
{/block}
