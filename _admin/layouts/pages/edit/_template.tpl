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

{block name="zHead" append}
    <!-- summernote -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/summernote/summernote-lite.min.css">

    <!-- filepond -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond.css">
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.css">
    {literal}<style>
    .hideForAddTop .hideForAdd {display: none;}
    </style>{/literal}
{/block}

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
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" enctype="multipart/form-data" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success, $error)}
                <div>
                    <div class="inLeft index-10">
                        <h4 class="font-19 top-0 bottom-0 text6 boldText">{zThis z="Editing page:"}</h4>
                        <h4 class="font-19 top-0 text4 boldText">
                            {$zPageTools->zPageGetPageName($smarty.get.id_page, $zUser->id_lang)}
                            <span class="font-14"><a href="{$zContent->srcFull["main"]}{$editPage[$zUser->id_lang]->url|ltrim:'/'}" target="_blank">[{zThis z="View Page"}]</a></span>
                        </h4>
                    </div>
                    <div class="rightText padB-15">
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                                    {zThis z="Select Language"}
                                </label>
                                <select class="zSelect pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                    <option disabled>{zThis z="Choose..."}</option>
                                    {$zTools->zToolsGetLanguages($zUser->id_lang)}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div><input name="id_page" id="id_page" type="text" value="{$smarty.get.id_page}" style="display:none"></div>
                <div class="col-8 colTop padR-10 padT-10" zMob-1024="padR-0">
                    <h6 class="bottom-10 top-0 font-1em">{zThis z="Title"}</h6>
                    <div class="bottom-10">
                        <input name="page_url" id="page_url" type="text" class="padL-45" value="{$editPage[$zUser->id_lang]->url}" placeholder="{zThis z="URL with / at start"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-file-code"></i>
                        </div>
                    </div>
                    {foreach from=$zTools->zToolsGetAllLangs() item=l}
                        <div class="divFor{$l->id} divFor" style="{if $l->id !== $zUser->id_lang}display: none{/if}">
                            <div><input name="id_lang[{$l->id}]" id="id_lang_{$l->id}"
                                        type="text" value="{$l->id}" style="display:none"></div>
                            <div class="bottom-10">
                                <input name="page_name[{$l->id}]" id="page_name_{$l->id}" type="text"
                                       class="padL-45" value="{$editPage[$l->id]->name}" placeholder="{zThis z="Title"}">
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
                </div>
                <div class="col-4 colTop padL-10 padT-10" zMob-1024="padL-0">
                    <h6 class="bottom-12 top-0 font-1em">{zThis z="Subpage"}</h6>
                    <div>
                        <input class="zSwitch" type="checkbox" name="not_a_subpage" id="not_a_subpage"
                        {if !$editPage[$l->id]->isSubpage}value="enabled" checked{/if}>
                        <label for="not_a_subpage">{zThis z="Not a subpage."}</label>
                        <div class="font-13">{zThis z="Uncheck this switch, if you want this page to be a subpage of another."}</div>
                    </div>
                    <select class="zSelect pad-10 top-12 bottom-20 {if !$editPage[$l->id]->isSubpage}disabledInput{/if}" id="change_subpage" name="change_subpage">
                        <option selected>{zThis z="Choose..."}</option>
                        {$zPageTools->zPageGetSubpageSelector($editPage[$l->id]->id, $zUser->id_lang)}
                    </select>
                    <script>
                    $("#not_a_subpage").change(function() {
                        $("#change_subpage").toggleClass("disabledInput");
                    });
                    </script>
                    <h6 class="bottom-0 top-0 font-1em">{zThis z="Category"}</h6>
                    {$zCategoryTools->zCategoryCheckboxes($zUser->id_lang, $editPage[$zUser->id_lang]->id)}
                </div>
                <h6 class="bottom-10 top-0 font-1em">{zThis z="Holders"}</h6>
                <div>
                    <div class="col-12 back7 bottom-20 pad-20 centerText pointThis rad-5 gray2" id="AddNewHolder">
                        {zThis z="Add a New Holder"}
                    </div>
                    <div id="dragulaAdd" class="col-4 colTop padR-20 zMob-padR-0 between-20 bottom-20 hideForAddTop" style="display: none">
                        {assign var=holders value=$zTools->zToolsGetAllHolders($zUser->id_lang)}
                        {include file="{$zContent->src["admin"]}/_partials/holderEdit.tpl"}
                    </div>
                    <div id="dragula" class="col-12 colTop between-20">
                        {assign var=blocks value=$editPage[$zUser->id_lang]->template->blocks}
                        {for $id_block=1 to $blocks}
                            <div class="dragula pad-20 padT-40 back7 rad-5 between-20">
                                {assign var=holders value=$editPage[$zUser->id_lang]->zPageGetHolders($zUser->id_lang, $id_block)}
                                {include file="{$zContent->src["admin"]}/_partials/holderEdit.tpl" id_block=$id_block}
                                <div class="blockTitle floatingSpace text6 font-14 boldText top-10 left-10">
                                    {zThis z="Block"} {$id_block}
                                </div>
                            </div>
                        {/for}
                    </div>
                </div>
                <div class="ButtonPos1 IWantItDownR padR-30 widthAll fixed index-10 padL-332" zMob-1200="padL-32">
                    <div class="pad-20 gradYouToWhite">
                        <button class="zButton primary widthAll zShadow top-20">{zThis z="Save"}</button>
                    </div>
                </div>
                <div class="ButtonPos2">
                    <button class="zButton primary widthAll zShadow top-20">{zThis z="Save"}</button>
                </div>
            </form>
        </div>
    </div>
    {include file="_partials/modal.tpl" _mLabel=ForUpload _mTitle={zThis z="Error"}}
{/block}

{block name="zBottom" append}
    <!-- summernote -->
    <script src="{$zContent->srcFull["scripts"]}/summernote/summernote-lite.min.js"></script>
    {if $zContent->language->id !== "1"}
    <script src="{$zContent->srcFull["scripts"]}/summernote/lang/summernote-{$zContent->language->four_code}.min.js"></script>
    {/if}

    <!-- filepond plugins -->
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-file-validate-size.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-file-validate-type.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-file-rename.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-image-preview.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.js"></script>

    <!-- filepond -->
    <script src="{$zContent->srcFull["scripts"]}/filepond/locale/{$zContent->language->four_code}.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond.js"></script>

    <script>
        function dragulaEvery() {
            var containers = $(".dragula").toArray();

            // dragula affect: copy a holder from left column to right
            dragula([document.querySelector("#dragulaAdd"), containers], {
                isContainer: function (el) {
                    return el.classList.contains("dragula");
                },
                copy: function (el, source) {
                    return source === document.querySelector("#dragulaAdd");
                },
                accepts: function (el, target) {
                    return target !== document.querySelector("#dragulaAdd");
                },
                moves: function (el, container, handle) {
                    var searchPond = $(handle).closest(".filepond");
                    var searchSummer = $(handle).closest(".note-editor");
                    if (searchPond.length || searchSummer.length ||
                        handle.classList.contains("filepond") || handle.classList.contains("blockTitle")) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }).on("drag", function (el) {
                // when dragging a holder we do not want the content to be visible
                el.querySelectorAll(".hideForAdd").forEach(function(value, i) {
                    value.style.display = "none";
                });
            }).on("out", function (el, container, source) {
                // the data attribute tells us the old modalNumber of our holder,
                // because on page load, holders on the left column has their own
                // modalNumber values, but when they are copied to the actual page,
                // we need to change it with a new modalNumber
                var data = el.getAttribute("data");

                // make the content visible again
                var hides = el.querySelectorAll(".hideForAdd");
                if ($(el).find(".fa-chevron-up").css("display") !== "none") {
                    hides[1].style.display = "";
                }
                hides[0].style.display = "";

                var blockTitle = $(el).parent().find(".blockTitle");
                if (blockTitle.is(":first-child")) {
                    blockTitle.remove();
                    $(el).parent().append(blockTitle);
                }

                $(el).find(".zTog-downHolder" + data).removeClass("zTog-downHolder" + data).addClass("zTog-downHolder" + modalNumber);
                $(el).find(".zShow-downHolder" + data).removeClass("zShow-downHolder" + data).addClass("zShow-downHolder" + modalNumber);

                // time to update the modalNumber
                el.querySelectorAll(".zModal")[0].setAttribute("id", "modal" + modalNumber);
                el.querySelectorAll(".zModalLink")[0].setAttribute("href", "#modal" + modalNumber);
                el.classList.remove("zDestroy-holder"+data);
                el.classList.add("zDestroy-holder"+modalNumber);
                var remove = el.querySelectorAll("[class*=zRemove]")[0];
                remove.classList.remove("zRemove-holder"+data);
                remove.classList.add("zRemove-holder"+modalNumber);

                // now lets increase the modalNumber value for the next arrival
                modalNumber += 1;

                // functions that need a rerun after a copy
                zRemove();
                zBetween();
                zTog();
                runFilePond();
                summernoteKeyup($(el).find(".note-editable"));
                storeCat();

                if ($(source).attr("id") == "dragulaAdd") {
                    toggleParentNext($(el).find(".toggleParentNext"));
                }
            });
        }

        // this function helps storing the current entered data to hidden fields
        function storingData(now) {
            // select main div for holders
            var dragula = $("#dragula");

            // the zContent-classed are always holds the visible language info,
            // so we should select them
            var storeThis = dragula.find("[name^='zContent[']");
            if (storeThis.length) {
                // "now" value entered to this function stands for current language id
                // and by defining "prev", we get the language id just before the language change
                // on language change, we need to store the previous language info to hidden fields
                var prev = storeThis.attr("name").replace("zContent[", "").replace("][]", "");
                dragula.find("[name^='zContent["+prev+"]']").each(function(i, v) {
                    // this is zContent-classed div
                    var cur = $(v);
                    // this is the previous language's hidden field to store the data
                    var old = $(v).parent().prev().find("[name^='content["+prev+"]']");
                    // this is the current language's hidden field to set the data
                    var nowo = $(v).parent().prev().find("[name^='content["+now+"]']");

                    if (cur.hasClass("zLink1")) {
                        old.val(cur.val() + ";" + cur.next().val());
                        $(v).parent().prev().children().each(function() {
                            var already = $(this).val().split(";");
                            already[0] = cur.val();
                            already = already.join(";");
                            $(this).val(already);
                        });

                        var nowo = nowo.val().split(";");

                        cur.val(nowo[0]);
                        cur.next().val(nowo[1]);
                    } else {
                        // store the previous language's data to hidden field
                        old.val(cur.val());
                        // retrieve the current language's data from hidden field
                        cur.val(nowo.val().trim());
                    }

                    // if we have summernote on our holder, we should do this trick
                    if (cur.hasClass("summernote")) {
                        cur.summernote("code", nowo.val().trim());
                    }
                    // this is a BUG: don't know why, but sometimes
                    // summernote doubles itself, but when that happens, remove the second
                    if (cur.next().next().hasClass("note-editor note-frame")) {
                        cur.next().next().remove();
                    }

                    // finally update the zContent language id
                    cur.attr("name", "zContent["+now+"][]");
                });
            }
        }

        // when a user writes on summernote, update the hidden textarea as well
        function summernoteKeyup(element) {
            element.keyup(function() {
                var value = $(this).prop("innerHTML");
                $(this).closest(".note-frame").prev().html(value);
            });
        }

        function storeCat() {
            $(".zCategory").on("change", function() {
                var value = $(this).val();

                $(this).parent().prev().children().each(function() {
                    $(this).val(value);
                });
            });
        }

        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, summernote, filepond, filepondID) {
            // create a new formdata
            var data = new FormData();
            // send the page id to server, because we will create a folder for it
            data.set("zPage", "{$editPage[$zUser->id_lang]->id}");
            if (filepond) {
                data.set("filepond", "true");
            }
            data.set("langcode", "{$zContent->language->iso_code}");
            // send the file to server
            data.append("fileToUpload", image);
            $.ajax({
                url: "{$zContent->srcFull["images"]}/upload.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(filename) {
                    // this is an image tag to insert into a summernote after upload
                    var image = $("<img>").attr("src", "{$zContent->srcFull["images"]}/uploads/{$editPage[$zUser->id_lang]->id}/" + filename).addClass("img-fluid");
                    if (summernote) {
                        // if a summernote uploaded the file, insert the image tag
                        summernote.summernote("insertNode", image[0]);
                    } else if (filepond) {
                        // if a filepond uploads a file, we have hidden fields named "images[]"
                        // instead of "content[]", normally storingData() function stores
                        // all hidden content but images, so files uploaded with filepond will be
                        // stored through here
                        $(filepond).parent().prev().children().each(function () {
                            // get the hidden content's current value
                            var already = $(this).val();
                            var alreO = [];
                            // split the value by ';', because
                            // sometimes there is more than one file
                            already = already.split(";");
                            // update the one we are currently uploading
                            // or we don't have any, insert a new one
                            already.forEach(function(val, key) {
                                alreO[key+1] = val.trim();
                            });
                            alreO[0] = filename.trim();
                            // join them again by ';'
                            already = alreO.join(";");
                            // update the value, store the data
                            $(this).val(already);
                        });
                        $(filepond).find("#filepond--item-" + filepondID).find("legend").text(filename);
                        $(filepond).find("#filepond--item-" + filepondID).find(".filepond--file-info-main").text(filename);
                    }
                },
                error: function(data) {
                    // if upload gives an error,
                    // woke the modalForUpload
                    $("#modalForUpload").find(".zInside").text(data.responseText);
                    window.location.assign("#modalForUpload");
                }
            });
        }

        // start the pond, filepond
        function runFilePond() {
            document.getElementById("dragula").querySelectorAll(".filepond").forEach(function(v, i) {
                var loaded = $(v).prev();
                var value = v.previousElementSibling.value;
                var multi = loaded.attr("data-multi");
                if (value !== "") {
                    var files = [];
                    for (let i=0; i < value.split(";").length; i++) {
                        files.push({
                            source: "{$zContent->src["images"]}/uploads/{$editPage[$zUser->id_lang]->id}/"+value.split(";")[i],
                            options: {
                                type: "local"
                            }
                        });
                    }
                    var load = {
                        load: (uniqueFileId, load) => {
                            // you would get the file data from your server here
                            fetch(uniqueFileId)
                            .then(res => res.blob())
                            .then(load);
                        }
                    };
                }
                if (loaded.attr("data-filepond-loaded") !== "true") {
                    FilePond.create(v, {
                        allowImagePreview: true,
                        allowMultiple: (multi == "true" ? true : false),
                        allowReorder: (multi == "true" ? true : false),
                        maxFileSize: "20MB",
                        acceptedFileTypes: ["image/png", "image/jpg", "image/jpeg", "image/gif", "video/mp4", "video/m4v"],
                        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                            // Do custom type detection here and return with promise
                            resolve(type);
                        }),
                        files: (files ? files : null),
                        server: (load ? load : null)
                    });
                }

                if (loaded.closest("#dragula").length) {
                    loaded.attr("data-filepond-loaded", true);
                }
            });

            // set filepond server
            FilePond.setOptions({
                server: "./",
            });

            filepondCallbacks();
        }

        // callbacks for filepond
        function filepondCallbacks() {
            $("#dragula").find("div.filepond").each(function() {
                var firstID = $(this).find(".filepond--assistant").attr("id");

                if (!window.pondIDS.includes(firstID)) {
                    // when a filepond loaded, if we got already uploaded files to display
                    // from the database, we will store their ids and indexes on the window
                    // object, as we will need them late
                    $(this).on("FilePond:init", function(e) {
                        // filepond root object
                        var parent = $(e.target);
                        // find the current filepond's children and their ids
                        parent.find(".filepond--list").children().each(function() {
                            var id = $(this).attr("id").replace("filepond--item-", "");
                            // this is an array to store their indexes
                            window.pondNS[id] = $(this).index();
                        });
                    });

                    // when a file added in a filepond, we will have to upload it
                    // to server
                    $(this).on("FilePond:processfilestart", function(e) {
                        // getting the files
                        var files = e.detail.pond.getFiles();
                        // calling the uploading service
                        uploadImage(e.detail.file.file, null, e.target, e.detail.file.id);
                        // let's update keys
                        for (let i=0; i < files.length; i++) {
                            // and when a new upload has been made, all the indexes
                            // in particular filepond shifts, so we will update our array
                            window.pondNS[files[0].id] = i;
                        }
                    });

                    $(this).on("FilePond:removefile", function(e) {
                        var elem = $(e.detail.pond.element.get());
                        var elemID = e.detail.file.id;
                        var files = e.detail.pond.getFiles();

                        elem.parent().prev().children().each(function () {
                            var already = $(this).val();
                            already = already.split(";");
                            already.splice(window.pondNS[elemID], 1);
                            already = already.join(";");
                            $(this).val(already);
                        });

                        // let's update keys
                        for (let i=0; i < files.length; i++) {
                            // and when a file has been removed, all the indexes
                            // in particular filepond shifts, so we will update our array
                            window.pondNS[files[i].id] = i;
                        }
                    });

                    $(this).on("FilePond:reorderfiles", function(e) {
                        var elem = $(e.detail.pond.element.get());
                        var elemID = e.detail.pond.getFile().id;
                        var files = e.detail.pond.getFiles();

                        elem.parent().prev().children().each(function () {
                            var already = $(this).val().trim();
                            already = already.split(";");
                            var newAlre = [];

                            already.forEach(function(val, ind) {
                                for (let i=0; i < files.length; i++) {
                                    var filename = elem.find("#filepond--item-" + files[i].id).find("legend");
                                    if (val.trim() == filename.text().trim()) {
                                        newAlre[ind] = already[i];
                                    }
                                }
                            });

                            newAlre = newAlre.join(";");
                            $(this).val(newAlre);
                        });

                        // let's update keys
                        for (let i=0; i < files.length; i++) {
                            // and when a file has been moved to another index, all the indexes
                            // in particular filepond shifts, so we will update our array
                            window.pondNS[files[i].id] = i;
                        }
                    });
                }

                if (firstID) {
                    window.pondIDS.push(firstID);
                }
            });
        }

        function toggleParentNext(element) {
            element.click(function() {
                $(this).find(".arrows").toggle();
                $(this).parent().next().toggle();
            });
        }

        // this is the modal number, each holder has a cross button,
        // to remove the holder itself, so they all need a unique id
        var modalNumber = "{$modalNumber}";

        function zPageJS() {
            toggleParentNext($(".toggleParentNext"));

            dragulaEvery();

            // on language change
            $("#change_lang").change(function(){
                // lets get new language code
                var now = $(this).val();

                // we should store newly added data to the hidden fields
                storingData(now);

                // hide other language fields, bring the selected language
                $(".divFor").css("display", "none");
                $(".divFor"+now).css("display", "block");
            });

            // start all summernotes
            $(".summernote").summernote({
                lang: "{$zContent->language->four_code}",
                tabsize: 1,
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i=0; i < files.length; i++) {
                            uploadImage(files[i], $(this));
                        }
                    }
                }
            });
            summernoteKeyup($(".note-editable"));
            storeCat();

            // register filepond plugins
            FilePond.registerPlugin(
                // validates the size of the file...
                FilePondPluginFileValidateSize,
                // validates the file type...
                FilePondPluginFileValidateType,
                // preview the image file type...
                FilePondPluginImagePreview,
                // preview the vide file type...
                FilePondPluginMediaPreview,
                // rename
                FilePondPluginFileRename,
            );

            // set filepond language
            FilePond.setOptions(window["{$zContent->language->four_code}"]);

            window.pondNS = [];
            window.pondIDS = [];

            runFilePond();

            // add new holder button
            $("#AddNewHolder").click(function() {
                var dragula = $("#dragula");
                var dragulaAdd = $("#dragulaAdd");

                dragulaAdd.toggle();
                dragula.toggleClass("col-8").toggleClass("col-12");

                if (dragulaAdd.css("display") !== "none") {
                    var count = dragula.children().length;
                    var newHeight = (dragulaAdd.height() - ((count-1)*20)) / count;
                    dragula.children().css("min-height", newHeight);
                } else {
                    dragula.children().css("min-height", "100%");
                }
            });

            // submit form functions
            $("#zPage-edit-form").submit(function(e) {
                e.preventDefault();
                var now = $("#change_lang").val();
                storingData(now);
                storeCat();

                var form = $(this).clone();
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("[name='"+name+"'] option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
                form.find("#dragulaAdd").remove();
                $("#dragula").children().each(function(i) {
                    var z = $("<input>")
                        .attr("name", "block"+i).val($(this).children().length-1);
                    form.append(z);
                });
                form.find("input[name='filepond']").remove();
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
