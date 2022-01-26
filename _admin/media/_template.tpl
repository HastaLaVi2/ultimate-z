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
    <style>
    #upload_progress { padding: 4px 0;}
    #upload_progress > div { padding:3px 0;}
    .progress_track { display:inline-block;width:200px;height:12px;border:2px solid var(--color2);border-radius:5px;margin: 0 4px 0 10px;}
    .progress { background-color: var(--color2);border-radius:3px;height:10px; }
    .is_dir .size { color:transparent;font-size:0;}
    .is_dir .size:before { content: "--"; font-size:14px;color:#333;}
    .is_dir .download{ visibility: hidden}
    .custom-menu li { padding: 8px 12px;cursor: pointer;}
    .custom-menu li:hover { background-color: var(--color7);}
    </style>
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/simple-datatables/style.css">
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
{/block}

{block name="zContent" append}
    <ul class="font-15 display-none hideRest floatingSpace index-1000 noWrap whiteBack rad-10 zShadow2 cleanList">
        <li data-action = "first">First thing</li>
        <li data-action = "second">Second thing</li>
        <li data-action = "third">Third thing</li>
    </ul>
    <nav>
        <div id="breadcrumb" class="padB-8 font-16">&nbsp;</div>
    </nav>
    <section class="whiteBack rad-15 pad-20 font-16">
        <input id="hashchange" type="text" class="display-none">
        <input id="copy_files" type="text" class="display-none">
        <input id="cut_files" type="text" class="display-none">
        <div id="upload_progress"></div>
        <div id="actions" class="padB-10">
            {if $allow_upload}
            <span class="upload pointThis text5 boldText padR-10">
                <label for="fragdrop" class="pointThis">
                    <i class="fas fa-upload padR-5"></i> {zThis z="upload files"}
                </label>
                <input id="fragdrop" type="file" multiple class="displayNone" />
            </span>
            {/if}
            {if $allow_create_folder}
            <a class="create padR-10" href="#modalForCreate">
                <i class="fas fa-plus padR-5"></i> {zThis z="create folder"}
            </a>
            {/if}
            <span class="copy pointNo gray2 boldText padR-10">
                <i class="fas fa-copy padR-5"></i> {zThis z="copy"}
            </span>
            <span class="cut pointNo gray2 boldText padR-10">
                <i class="fas fa-cut padR-5"></i> {zThis z="cut"}
            </span>
            <span class="paste pointNo gray2 boldText padR-10">
                <i class="fas fa-paste padR-5"></i> {zThis z="paste"}
            </span>
            <a class="rename hideActions display-none padR-10" href="#modalForRename">
                <i class="fas fa-pen padR-5"></i> {zThis z="rename"}
            </a>
            <a class="download forceLink hideActions display-none padR-10">
                <i class="fas fa-download padR-5"></i> {zThis z="download"}
            </a>
            <span class="delete hideActions display-none pointThis text5 boldText">
                <i class="fas fa-trash-alt padR-5"></i> {zThis z="delete"}
            </span>
        </div>
        <div id="table">
            <table class="zTable">
                <thead>
                    <tr>
                        <th class="width-20">
                            <input type="checkbox" class="zCheckbox allBoxes boldMin-2 left--8 rad-5 pad-10">
                        </th>
                        <th>{zThis z="Name"}</th>
                        <th>{zThis z="Size"}</th>
                        <th>{zThis z="Modified"}</th>
                        <th>{zThis z="Permissions"}</th>
                    </tr>
                </thead>
                <tbody id="list">
                </tbody>
            </table>
            <div id="Hover" class="floatingSpace widthAll row-12 mortalW-9 displayNone">
                <div class="hollyMid centerText boldText text2 font-30 pointNo">Drop it like it's hot</div>
            </div>
        </div>
    </section>
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mLabel=ForView
        _mTitle={zThis z="Preview"}
    }
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mLabel=ForCreate
        _mForm={$zContent->base_uri}
        _mFormId=mkdir
        _mContent='<input id="dirname" class="pad-10" type=text name=name value="" />'
        _mSubmit={zThis z="Create"}
        _mTitle={zThis z="Create New Folder"}
    }
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mLabel=ForRename
        _mForm={$zContent->base_uri}
        _mFormId=renaming
        _mHidden='<input type=text name=file />'
        _mContent='<input id="dirname" class="pad-10" type=text name=new value="" />'
        _mSubmit={zThis z="Submit"}
        _mTitle={zThis z="Enter a New Name"}
    }
{/block}

{block name="zBottom" append}
<script>
function zPageJS_media() {
    var XSRF = (document.cookie.match('(^|; )_z_xsrf=([^;]*)')||0)[2];
    var MAX_UPLOAD_SIZE = {$MAX_UPLOAD_SIZE};
    $("#hashchange").on("change", function() {
        list();
    });
    list();

    function table() {
        // Simple Datatable
        let tables = document.querySelectorAll(".zTable");

        if (zTables[0] && typeof(zTables[0]) == "object") {
            var newFolder = $("#list").clone().html();
            zTables[0].destroy();
            $("#list").html(newFolder);
        }

        tables.forEach((item, i) => {
            zTables[0] = new simpleDatatables.DataTable(item, {
                columns: [
                    { select: [0], sortable: false},
                ]
            });
            zTables[0].on("datatable.page", function(page) {
                $("#zContent").find("a").click(magicLinks);
                tableFunctions(true);
            });
            zTables[0].on("datatable.sort", function(column, direction) {
                $("#zContent").find("a").click(magicLinks);
                tableFunctions(true);
            });
        });

        zDetect();
        tableFunctions();

        $(".allBoxes").click(function() {
            var checkBoxes = $("#list .zCheckbox");
            checkBoxes.prop("checked", $("#list .zCheckbox:checked").length != checkBoxes.length ? true : false);
            checkboxActions();
        });

        $(".hideActions").removeClass("display-none").addClass("display-none");
        $(".copy").addClass("pointNo").removeClass("pointThis text5");
        $(".cut").addClass("pointNo").removeClass("pointThis text5");

        $("#breadcrumb a").click(function() {
            $("#hashchange").val($(this).attr("data-href")).trigger("change");
        });
    }

    function tableFunctions(special) {
        $("#list a").click(function() {
            var el = $(this);
            if (el.attr("type") == "dir") {
                $("#hashchange").val(el.attr("data-href")).trigger("change");
            } else {
                $.ajax({
                    type: "POST",
                    url: "{$zContent->base_uri}",
                    data: { "do":"preview",name:el.text(),xsrf:XSRF,file:el.attr("data-file")},
                    error: function(r) {
                        var params = JSON.parse(r.responseText.slice(0, -1));
                        window.location.assign("#modalForView");
                        var title = $("#modalForView .modal-header h5").clone().text(el.text());
                        $("#modalForView .modal-header").html(title[0].outerHTML
                            +"<span class='font-12'>"+formatFileSize(params[2])+"</span>");
                        var html = params[1] == "img"
                            ? "<img src='"+params[0]+"' style='max-height: 60vh;max-width: 100%'>"
                            : "";
                        $("#modalForView .zInside").html(html);
                    },
                    dataType: "json"
                });
            }
        });

        $("#list .zCheckbox").change(checkboxActions);
        if (special && special == true) {
            $(".hideActions").removeClass("display-none").addClass("display-none");
            $(".copy").addClass("pointNo").removeClass("pointThis text5");
            $(".cut").addClass("pointNo").removeClass("pointThis text5");
            $("#list .zCheckbox").prop("checked", false);
            $(".allBoxes").prop("checked", false);
        }
    }

    function checkboxActions() {
        var actions = $("#actions");
        var count = $("#list .zCheckbox:checked");
        var del = actions.find(".delete");
        var dow = actions.find(".download");
        var ren = actions.find(".rename");
        var copy = actions.find(".copy");
        var cut = actions.find(".cut");
        var delAr = [], dowAr = [], allAr = [], theresIsDelete = false;

        if (count.length) {
            count.each(function() {
                if (!$(this).hasClass("allBoxes")) {
                    var data = $(this).parent().parent();
                    var file = data.attr("data-file");
                    var deletable = data.attr("data-deletable");
                    var download = data.attr("data-download");

                    if(deletable && deletable == "true") { delAr.push(file)} else { theresIsDelete = true}
                    dowAr.push(download);
                    allAr.push(file);
                }
            });
            if (theresIsDelete == false) {
                del.removeClass("display-none").attr("data-file", JSON.stringify(delAr));
            } else {
                if(!del.hasClass("display-none")) del.addClass("display-none");
            }
            dow.removeClass("display-none").attr("href", "?do=download&file=" + JSON.stringify(dowAr));
            if (count.length == 1 && theresIsDelete == false) {
                ren.removeClass("display-none");
            } else {
                if(!ren.hasClass("display-none")) ren.addClass("display-none");
            }
            if (delAr[0]) {
                $("#renaming input[name=file]").val(delAr[0]);
                $("#renaming input[name=new]").val(delAr[0].split("/").reverse()[0]);
            }
            copy.removeClass("pointNo").addClass("pointThis text5").attr("data-file", JSON.stringify(allAr));
            if (theresIsDelete == false) {
                cut.removeClass("pointNo").addClass("pointThis text5").attr("data-file", JSON.stringify(allAr));
            } else {
                if(!cut.hasClass("pointNo")) cut.removeClass("pointThis text5").addClass("pointNo");
            }
        } else {
            $(".hideActions").removeClass("display-none").addClass("display-none");
            copy.addClass("pointNo").removeClass("pointThis text5");
            cut.addClass("pointNo").removeClass("pointThis text5");
        }
        $(".allBoxes").prop("checked", count.length == $("#list .zCheckbox").length ? true : false);
    }

    $("#actions").on("click", ".delete", function() {
        $.ajax({
            type: "POST",
            url: "{$zContent->base_uri}",
            data: { "do": "delete", file: $(this).attr("data-file"), xsrf: XSRF},
            error: function(e) {
                list();
                $(".hideActions").removeClass("display-none").addClass("display-none");
                $(".copy").removeClass("pointThis text5 pointNo").addClass("pointNo");
                $(".cut").removeClass("pointThis text5 pointNo").addClass("pointNo");
            },
            dataType: "json"
        });
        return false;
    });

    $("#actions").on("click", ".paste", function() {
        var action = $(this).attr("data-action");
        $.ajax({
            type: "POST",
            url: "{$zContent->base_uri}",
            data: { "do": "paste", file: $(this).attr("data-file"), xsrf: XSRF, action: action, location: $("#hashchange").val()},
            error: function() {
                list();
                $(".hideActions").removeClass("display-none").addClass("display-none");
                if(action == "cut") {
                    $("#actions").find(".paste").addClass("pointNo").removeClass("pointThis text5");
                }
             },
            dataType: "json"
        });
        return false;
    });

    $("#actions").on("click", ".copy", function() {
        var data = $(this).attr("data-file");
        $("#copy_files").val(data);
        $("#actions").find(".paste").removeClass("pointNo").addClass("pointThis text5")
                     .attr("data-action", "copy").attr("data-file", data);
         Toastify({
             text: '{zThis z="Files successfully copied."}',
             duration: 3000,
         }).showToast();
    });

    $("#actions").on("click", ".cut", function() {
        var data = $(this).attr("data-file");
        $("#copy_files").val(data);
        $("#actions").find(".paste").removeClass("pointNo").addClass("pointThis text5")
                     .attr("data-action", "cut").attr("data-file", data);
        Toastify({
            text: '{zThis z="Files successfully cut."}',
            duration: 3000,
        }).showToast();
    });

    $("#renaming").submit(function(e) {
        var newName = $(this).find("[name=new]").val();
        var file = $(this).find("[name=file]").val();
        var zInside = $(this).find(".zInside");
        e.preventDefault();
        if (newName.length) {
            $.ajax({
                type: "POST",
                url: "{$zContent->base_uri}",
                data: { "do": "rename", new: newName, xsrf:XSRF, file: file},
                error: function(e) {
                    if (IsJsonString(e.responseText)) {
                        var res = JSON.parse(e.responseText);
                        Toastify({
                            text: res.error.msg,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    } else { zInside.find(".error").remove();list();window.location.assign("#");}
                },
                dataType: "json"
            });
        }
        return false;
    });

    $("#mkdir").submit(function(e) {
        var hashval = $("#hashchange").val().substr(1),
            $dir = $(this).find("[name=name]");
        e.preventDefault();
        if ($dir.val().length) {
            $.ajax({
                type: "POST",
                url: "{$zContent->base_uri}",
                data: { "do":"mkdir",name:$dir.val(),xsrf:XSRF,file:hashval},
                error: function() {
                    list();
                    window.location.assign("#");
                },
                dataType: "json"
            });
        }
        $dir.val("");
        return false;
    });

    {if $allow_upload}
    $("input[type=file]").change(function(e) {
        e.preventDefault();
        $.each(this.files,function(k,file) {
            uploadFile(file);
        });
    });
    function uploadFile(file) {
        var folder = $("#hashchange").val().substr(1);

        if (file.size > MAX_UPLOAD_SIZE) {
            renderFileSizeErrorRow(file,folder);
            return false;
        }

        var $row = renderFileUploadRow(file,folder);
        $("#upload_progress").append($row);
        var fd = new FormData();
        fd.append("file_data",file);
        fd.append("file",folder);
        fd.append("xsrf",XSRF);
        fd.append("do", "upload");
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "{$zContent->base_uri}");
        xhr.onload = function() {
            $row.remove();
            list();
        };
        xhr.upload.onprogress = function(e){
            if(e.lengthComputable) {
                $row.find(".progress").css("width", (e.loaded/e.total*100 | 0)+'%' );
            }
        };
        xhr.send(fd);
    }
    function renderFileUploadRow(file,folder) {
        return $row = $("<div/>")
            .append( $('<span class="fileuploadname" />').text( (folder ? folder+'/':'')+file.name))
            .append( $('<div class="progress_track"><div class="progress"></div></div>')  )
            .append( $('<span class="size" />').text(formatFileSize(file.size)) )
    };
    function renderFileSizeErrorRow(file,folder) {
        Toastify({
            text: "Error: " + (folder ? folder+'/':'')+ file.name + ' file size - <b>'
                    + formatFileSize(file.size) + '</b>'
                    +' exceeds max upload size of <b>' + formatFileSize(MAX_UPLOAD_SIZE) + '</b>',
            duration: 3000,
            backgroundColor: "#f3616d",
        }).showToast();
    }
    {/if}

    function list() {
        var $tbody = $("#list");
        var hashval = $("#hashchange").length ? $("#hashchange").val().substr(1) : null;
        $.get('?do=list&file='+ hashval,function(data) {
            $tbody.empty();
            $('#breadcrumb').empty().html(renderBreadcrumbs(hashval));
            if(data.success) {
                $.each(data.results,function(k,v){
                    v.path = v.path.replace("../../_media/", "").replace("./", "");
                    if (v.path == "hidden_drive") { v.is_deleteable = false}
                    $tbody.append(renderFileRow(v));
                });
                !data.results.length && $tbody.append('<tr><td class="empty" colspan=5>{zThis z="This folder is empty."}</td></tr>')
                data.is_writable ? $('body').removeClass('no_write') : $("body").addClass("no_write");
            } else {
                console.warn(data.error.msg);
            }
            table();
        }, "json");
    }

    function renderFileRow(data) {
        var $link = $('<a class="name" />')
            .attr("href", "#")
            .attr("data-href", data.is_dir ? "#" + data.path : "#")
            .text(data.name == "hidden_drive" ? "{zThis z='Hidden drive'}" : data.name).attr("data-file", data.path).attr("type", data.is_dir ? "dir" : "file");
        var allow_direct_link = '{if $allow_direct_link}true{else}false{/if}'
            if (!data.is_dir && !allow_direct_link)  $link.css('pointer-events','none');
        var perms = [];
        if(data.is_readable) perms.push('read');
        if(data.is_writable) perms.push('write');
        if(data.is_executable) perms.push('exec');
        var $html = $('<tr />')
            .attr("data-file", data.path)
            .attr("data-download", data.path)
            .addClass(data.is_dir ? "is_dir" : "")
            .append("<td class='select'><input type='checkbox' class='zCheckbox boldMin-2 rad-5 pad-10'></td>")
            .append( $('<td class="first" />').append(data.is_dir ? "<i class='fas fa-folder font-24 gray2 padR-15'></i>" : "<i class='fas fa-file font-24 gray2 padR-15'></i>").append($link) )
            .append( $('<td/>').attr('data-sort',data.is_dir ? -1 : data.size)
                .html($('<span class="size" />').text(formatFileSize(data.size))) )
            .append( $('<td/>').attr('data-sort',data.mtime).text(formatTimestamp(data.mtime)) )
            .append( $('<td/>').text(perms.join('+')) );
        if(data.is_deleteable) $html.attr("data-deletable", "true");
        return $html;
    }

    function renderBreadcrumbs(path) {
        var base = "",
            $html = $('<div/>').append( $('<a href=#>{$zPage->name}</a></div>') );
        $.each(path.split("/"),function(k,v){
            if(v) {
                var v_as_text = v;
                $html.append( $('<span/>').html(' <i class="fas fa-caret-right"></i> ') )
                    .append( $('<a/>').attr("href", "#").attr('data-href','#'+base+v).text(v_as_text == "hidden_drive" ? "{zThis z='Hidden drive'}" : v_as_text) );
                base += v + '/';
            }
        });
        return $html;
    }

    function IsJsonString(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }

    function formatTimestamp(unix_timestamp) {
        $.ajax({
            "async": false,
            "url": "{$zContent->srcFull["scripts"]}/apexcharts/locales/{$zContent->language->iso_code}.json",
            "dataType": "json",
            "success": function (data) {
                window.apexLang = data;
            }
        });
        var m = window.apexLang.options.shortMonths;
        var d = new Date(unix_timestamp*1000);
        return [m[d.getMonth()]," ",d.getDate(),", ",d.getFullYear()," ",
            (d.getHours() % 12 || 12),":",(d.getMinutes() < 10 ? "0" : "")+d.getMinutes(),
            " ",d.getHours() >= 12 ? "PM" : "AM"].join("");
    }

    function formatFileSize(bytes) {
        var s = ["bytes", "KB","MB","GB","TB","PB","EB"];
        for(var pos = 0;bytes >= 1000; pos++,bytes /= 1024);
        var d = Math.round(bytes*10);
        return pos ? [parseInt(d/10),".",d%10," ",s[pos]].join("") : bytes + " bytes";
    }

    // copied from: https://jsfiddle.net/u2kJq/241/
    // trigger action when the contexmenu is about to be shown.
    $("#zContent").on("contextmenu", function (event) {

        // avoid the real one.
        event.preventDefault();

        // show contextmenu.
        $(".custom-menu").finish().toggle(100).

        // in the right position (the mouse.)
        css({
            top: event.pageY - 32 + "px",
            left: event.pageX - 332 + "px"
        });
    });


    // if the document is clicked somewhere.
    $("#zContent").on("mousedown", function (e) {

        // if the clicked element is not the menu.
        if (!$(e.target).parents(".custom-menu").length > 0) {

            // hide it.
            $(".custom-menu").hide(100);
        }
    });


    // if the menu element is clicked.
    $(".custom-menu li").click(function(){
        // this is the triggered action name.
        switch($(this).attr("data-action")) {

            // a case for each action. your actions here.
            case "first": alert("first"); break;
            case "second": alert("second"); break;
            case "third": alert("third"); break;
        }

        // hide it AFTER the action was triggered.
        $(".custom-menu").hide(100);
    });// The plugin code

    $.fn.draghover = function(options) {
        return this.each(function() {

            var collection = $(),
            self = $(this);

            self.on('dragenter', function(e) {
                if (collection.length === 0) {
                    self.trigger('draghoverstart');
                }
                collection = collection.add(e.target);
            });

            self.on('dragleave drop', function(e) {
                collection = collection.not(e.target);
                if (collection.length === 0) {
                    self.trigger('draghoverend');
                }
            });
        });
    };

    // Now that we have a plugin, we can listen for the new events
    $(window).draghover().on({
        'draghoverstart': function() {
            $("#Hover").removeClass("displayNone");
        },
        'draghoverend': function() {
            $("#Hover").addClass("displayNone");
        }
    });

    $(window).on("dragover", function(e){
        e.preventDefault();
        e.stopPropagation();
    }).on("drop", function(e){
        e.preventDefault();
        e.stopPropagation();
		var files = e.originalEvent.dataTransfer.files;
		$.each(files, function(k, file) {
			uploadFile(file);
		});
        $("#Hover").addClass("displayNone");
    });
}
</script>
{/block}
