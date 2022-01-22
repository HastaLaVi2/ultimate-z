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

{block name="zContent" append}
    <div class="col-12">
        <nav>
            <ol class="cleanList">
                <li><a href="{zPageUrl ID="9"}/index.php" class="inLine font-16">
                    <i class="fas fa-caret-left"></i>
                    {zPageName ID="9"}
                </a></li>
            </ol>
        </nav>

        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Editing category:"}</h4>
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success, $error)}
                <div>
                    <div class="zCol-4 zMob-zCol-12">
                        <div class="zGroup bottom-20">
                            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="change_lang">
                                {zThis z="Select Language"}
                            </label>
                            <select class="pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                <option disabled>{zThis z="Choose..."}</option>
                                {$zTools->zToolsGetLanguages($zUser->id_lang, true)}
                            </select>
                        </div>
                        <script>
                        $("#change_lang").change(function(){
                            $(".divFor").css("display", "none");
                            $(".divFor"+$("#change_lang").val()).css("display", "block");
                        });
                        </script>
                    </div>
                </div>
                <div><input name="id_category" id="id_category" type="text" value="{$smarty.get.id_category}" style="display:none"></div>
                {foreach from=$zTools->zToolsGetAllLangs() item=l}
                    <div class="divFor{$l->id} divFor" style="{if $l->id !== $zUser->id_lang_closest}display:none{/if}">
                        <div><input name="id_lang[{$l->id}]" id="id_lang_{$l->id}"
                                    type="text" value="{$l->id}" style="display:none"></div>
                        <div class="bottom-10">
                            <input name="category_name[{$l->id}]" id="category_name_{$l->id}" type="text"
                                   class="page-title padL-45" value="{$editPage[$l->id]->name}">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                {/foreach}
                <button class="zButton primary widthAll zShadow top-20">{zThis z="Save"}</button>
            </form>
        </div>
    </div>
{/block}

{block name="zBottom" append}
    <script>
        function zPageJS() {
            // submit form functions
            $("#zPage-edit-form").submit(function(e) {
                e.preventDefault();

                var form = $(this).clone();
                var post_url = form.attr("action");
                var post_data = form.serialize();

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
    </script>
{/block}
