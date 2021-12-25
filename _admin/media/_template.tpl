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
    <!-- filepond -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond.css">
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.css">
{/block}

{block name="zContent" append}
    <div class="whiteBack rad-15 pad-20 font-16">
        <div class="top-20">
            <input type="file" class="filepond">
        </div>
    </div>
    {foreach from=$files key=key item=file}
        {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
            _mForm="deleteFile()"
            _mLabel={$key}
            _mHidden="<input name='file_name' class='file_name' value='{$file}'>"
            _mTitle={zThis z="Delete File"}
            _mContent={zThis z="Are you sure you want to delete this file?"}
        }
    {/foreach}
{/block}

{block name="zBottom" append}
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
        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, summernote, filepond, filepondID) {
            // create a new formdata
            var data = new FormData();
            // send the page id to server, because we will create a folder for it
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
                    if (summernote) {
                    } else if (filepond) {
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

        function filepondRescue() {
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

            // start the pond, filepond
            var loaded = $(".filepond").prev();
            var value = {json_encode($files)};
            if (value[0]) {
                var files = [];
                for (let i=0; i < value.length; i++) {
                    files.push({
                        source: "{$zContent->srcFull["images"]}/"+value[i],
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
            pond = FilePond.create(document.querySelector(".filepond"), {
                allowImagePreview: true,
                allowMultiple: true,
                allowReorder: true,
                maxFileSize: "20MB",
                fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                    // Do custom type detection here and return with promise
                    resolve(type);
                }),
                files: (files ? files : null),
                server: (load ? load : null),
                beforeRemoveFile: function(item) {
                    var c = {json_encode($files)};
                    var ourKey;

                    for (var key in c) {
                        if (c[key] === item.filename) {
                            ourKey = key;
                        }
                    }
                    window.lastID = item.id;
                    window.location.assign("#modal" + ourKey);
                    return false;
                }
            });

            // set filepond server
            FilePond.setOptions({
                server: "./",
            });
        }

        // callbacks for filepond
        function filepondCallbacks() {
            $(".filepond").each(function() {
                // when a file added in a filepond, we will have to upload it
                // to server
                $(this).on("FilePond:processfilestart", function(e) {
                    // calling the uploading service
                    uploadImage(e.detail.file.file, null, e.target, e.detail.file.id);
                });
            });
        }

        function zPageJS() {
            window.lastID = "";
            filepondRescue();
            filepondCallbacks();
        }

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });

        $(".zModalContent .zForm").submit(function(e) {
            e.preventDefault();

            // create a new formdata
            var data = new FormData();
            data.set("file_name", $(this).find(".file_name").val());

            $.ajax({
                url: "{$zContent->srcFull["images"]}/delete.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(data) {
                    window.location.assign("#");
                    pond.removeFile(window.lastID);
                    Toastify({
                        text: "{zThis z="File has been deleted."}",
                        duration: 3000
                    }).showToast();
                },
                error: function() {
                    window.location.assign("#");
                    Toastify({
                        text: "{zThis z="There was an error deleting your file."}",
                        duration: 3000
                    }).showToast();
                }
            });
        });
    </script>
{/block}
