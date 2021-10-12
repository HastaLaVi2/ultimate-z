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
                <li><a href="{zPageUrl ID="6"}/index.php" class="inLine font-16">
                    <i class="fas fa-caret-left"></i>
                    {zPageName ID="6"}
                </a></li>
            </ol>
        </nav>

        <div class="whiteBack rad-15 pad-20 font-16">
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success, $error)}
                <div>
                    <h4 class="inLeft font-19 top-0 text4 boldText">{zThis z="Add New Page"}</h4>
                    <div class="rightText">
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="change_lang">
                                    {zThis z="Select Language"}
                                </label>
                                <select class="pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                    <option disabled>{zThis z="Choose..."}</option>
                                    {$zTools->zToolsGetLanguages($zUser->id_lang)}
                                </select>
                            </div>
                            <script>
                            $("#change_lang").change(function(){
                                $(".divFor").css("display", "none");
                                $(".divFor"+$("#change_lang").val()).css("display", "block");
                            });
                            </script>
                        </div>
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20 padL-20 zMob-padL-0">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="change_template">
                                    {zThis z="Choose a Template"}
                                </label>
                                <select class="pad-10 top-0 bottom-0" id="change_template" name="change_template">
                                    <option disabled>{zThis z="Choose..."}</option>
                                    {$zTools->zToolsGetTemplates($zUser->id_lang)}
                                </select>
                            </div>
                            <script>
                            $("#change_template").change(function(){
                                $(".hookFor").css("display", "none");
                                $(".hookFor"+$("#change_template").val()).css("display", "block");
                            });
                            </script>
                        </div>
                    </div>
                </div>
                <h6 class="bottom-10 top-0 font-1em">{zThis z="Title"}</h6>
                <div class="bottom-10">
                    <input name="page_url" id="page_url" type="text" class="padL-45" placeholder="{zThis z="URL with / at start"}">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-file-code"></i>
                    </div>
                </div>
                {foreach from=$zTools->zToolsGetAllLangs() item=l}
                    <div class="divFor{$l->id} divFor" style="{if $l->id !== $zUser->id_lang}display:none{/if}">
                        <div><input name="id_lang[{$l->id}]" id="id_lang_{$l->id}"
                                    type="text" value="{$l->id}" style="display:none"></div>
                        <div class="bottom-10">
                            <input name="page_name[{$l->id}]" id="page_name_{$l->id}" type="text"
                                   class="page-title padL-45" placeholder="{zThis z="Title"}">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                {/foreach}
                <h6 class="bottom-10 top-0 font-1em">{zThis z="Meta Description"}</h6>
                <p>{zThis z="If you do not enter a meta description, the first text on the page will be used."}</p>
                {foreach from=$zTools->zToolsGetAllLangs() item=l}
                    <div class="divFor{$l->id} divFor" style="{if $l->id !== $zUser->id_lang}display: none{/if}">
                        <div class="bottom-10">
                            <input name="page_meta[{$l->id}]" id="page_meta_{$l->id}" type="text" class="padL-45" value="{$editPage[$l->id]->meta}">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-keyboard"></i>
                            </div>
                        </div>
                    </div>
                {/foreach}
                <h6 class="bottom-0 top-0 font-1em">{zThis z="Category"}</h6>
                {$zCategoryTools->zCategoryCheckboxes($zUser->id_lang, $editPage[$zUser->id_lang]->id)}
                <script>
                $(".page-title").keyup(function(){
                    $("#page_url").val("/"+slug($(this).val()));
                });
                </script>
                <div class="ButtonPos1 IWantItDownR padR-30 widthAll fixed index-10 padL-332" zMob-1200="padL-32">
                    <div class="pad-20 gradYouToWhite">
                        <button class="zButton primary widthAll zShadow top-20">{zThis z="Create"}</button>
                    </div>
                </div>
                <div class="ButtonPos2">
                    <button class="zButton primary widthAll zShadow top-20">{zThis z="Create"}</button>
                </div>
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
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("#"+name+" option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
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

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    </script>
{/block}
