<?php
/* Smarty version 3.1.40, created on 2022-01-10 19:09:27
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/media/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc8467e44a03_73498252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '757775edbf7bf0ed26119b2b5b400d1fac21dc11' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/media/_template.tpl',
      1 => 1641841766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dc8467e44a03_73498252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '81003639461dc8467e090c2_49119731';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80660796061dc8467e21516_47024391', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61185853261dc8467e29225_97285290', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88343480561dc8467e381f0_27304687', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_80660796061dc8467e21516_47024391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_80660796061dc8467e21516_47024391',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <style>
    #upload_progress { padding: 4px 0;}
    #upload_progress > div { padding:3px 0;}
    .progress_track { display:inline-block;width:200px;height:10px;border:1px solid #333;margin: 0 4px 0 10px;}
    .progress { background-color: #82CFFA;height:10px; }
    .is_dir .size { color:transparent;font-size:0;}
    .is_dir .size:before { content: "--"; font-size:14px;color:#333;}
    .is_dir .download{ visibility: hidden}
    .custom-menu li { padding: 8px 12px;cursor: pointer;}
    .custom-menu li:hover { background-color: var(--color7);}
    </style>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/simple-datatables/style.css">
    <?php echo '<script'; ?>
>
    var entriesPerPage = "<?php echo smarty_function_zThis(array('z'=>"entries per page"),$_smarty_tpl);?>
";
    var searchOn = "<?php echo smarty_function_zThis(array('z'=>"Search..."),$_smarty_tpl);?>
";
    var showingOf = "<?php echo smarty_function_zThis(array('z'=>"Showing [start] to [end] of [rows] entries"),$_smarty_tpl);?>
";
    showingOf = showingOf.replaceAll("[", "{").replaceAll("]", "}");
    var noRowFound = "<?php echo smarty_function_zThis(array('z'=>"No entries found"),$_smarty_tpl);?>
";

    $("input[type=checkbox]").change(function() {
        var clas = $(this).attr("class").split(" ")[1];
        var checked = $(this).prop("checked");
        $("."+clas).prop("checked", checked);
    });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/simple-datatables/simple-datatables.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zTop"} */
/* {block "zContent"} */
class Block_61185853261dc8467e29225_97285290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_61185853261dc8467e29225_97285290',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

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
            <?php if ($_smarty_tpl->tpl_vars['allow_upload']->value) {?>
            <span class="upload pointThis text5 boldText padR-10">
                <label for="fragdrop" class="pointThis">
                    <i class="fas fa-upload padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"upload files"),$_smarty_tpl);?>

                </label>
                <input id="fragdrop" type="file" multiple class="displayNone" />
            </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['allow_create_folder']->value) {?>
            <a class="create padR-10" href="#modalForCreate">
                <i class="fas fa-plus padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"create folder"),$_smarty_tpl);?>

            </a>
            <?php }?>
            <span class="copy pointNo gray2 boldText padR-10">
                <i class="fas fa-copy padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"copy"),$_smarty_tpl);?>

            </span>
            <span class="cut pointNo gray2 boldText padR-10">
                <i class="fas fa-cut padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"cut"),$_smarty_tpl);?>

            </span>
            <span class="paste pointNo gray2 boldText padR-10">
                <i class="fas fa-paste padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"paste"),$_smarty_tpl);?>

            </span>
            <a class="rename hideActions display-none padR-10" href="#modalForRename">
                <i class="fas fa-pen padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"rename"),$_smarty_tpl);?>

            </a>
            <a class="download forceLink hideActions display-none padR-10">
                <i class="fas fa-download padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"download"),$_smarty_tpl);?>

            </a>
            <span class="delete hideActions display-none pointThis text5 boldText">
                <i class="fas fa-trash-alt padR-5"></i> <?php echo smarty_function_zThis(array('z'=>"delete"),$_smarty_tpl);?>

            </span>
        </div>
        <table id="table" class="zTable">
            <thead>
                <tr>
                    <th class="width-20">
                        <input type="checkbox" class="zCheckbox allBoxes boldMin-2 left--8 rad-5 pad-10">
                    </th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Size"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Modified"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Permissions"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <tbody id="list">
            </tbody>
        </table>
    </section>
    <?php ob_start();
echo smarty_function_zThis(array('z'=>"Preview"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mLabel'=>'ForView','_mTitle'=>$_prefixVariable1), 0, true);
?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Create New Folder"),$_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mLabel'=>'ForCreate','_mForm'=>$_prefixVariable2,'_mFormId'=>'mkdir','_mContent'=>'<input id="dirname" class="pad-10" type=text name=name value="" />','_mSubmit'=>$_prefixVariable3,'_mTitle'=>$_prefixVariable4), 0, true);
?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Enter a New Name"),$_smarty_tpl);
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mLabel'=>'ForRename','_mForm'=>$_prefixVariable5,'_mFormId'=>'renaming','_mHidden'=>'<input type=text name=file />','_mContent'=>'<input id="dirname" class="pad-10" type=text name=new value="" />','_mSubmit'=>$_prefixVariable6,'_mTitle'=>$_prefixVariable7), 0, true);
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_88343480561dc8467e381f0_27304687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_88343480561dc8467e381f0_27304687',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

<?php echo '<script'; ?>
>
function zPageJS_media() {
    let dataTable;
    var XSRF = (document.cookie.match('(^|; )_z_xsrf=([^;]*)')||0)[2];
    var MAX_UPLOAD_SIZE = <?php echo $_smarty_tpl->tpl_vars['MAX_UPLOAD_SIZE']->value;?>
;
    $("#hashchange").on("change", function() {
        list();
    });
    list();

    function table() {
        // Simple Datatable
        let tables = document.querySelectorAll(".zTable");

        if (dataTable && typeof(dataTable) == "object") {
            var newFolder = $("#list").clone().html();
            dataTable.destroy();
            $("#list").html(newFolder);
        }

        tables.forEach((item, i) => {
            dataTable = new simpleDatatables.DataTable(item, {
                columns: [
                    { select: [0], sortable: false},
                ]
            });
            dataTable.on("datatable.page", function(page) {
                $("#zContent").find("a").click(magicLinks);
                tableFunctions();
            });
            dataTable.on("datatable.sort", function(column, direction) {
                $("#zContent").find("a").click(magicLinks);
                tableFunctions();
            });
        });

        zDetect();
        tableFunctions();

        $(".allBoxes").click(function() {
            var checkBoxes = $("#list .zCheckbox");
            checkBoxes.prop("checked", $("#list .zCheckbox:checked").length != checkBoxes.length ? true : false);
            checkboxActions();
        });

        $(".hideActions").each(function() {
            if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
        });

        $("#breadcrumb a").click(function() {
            $("#hashchange").val($(this).attr("data-href")).trigger("change");
        });
    }

    function tableFunctions() {
        $("#list a").click(function() {
            var el = $(this);
            if (el.attr("type") == "dir") {
                $("#hashchange").val(el.attr("data-href")).trigger("change");
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
",
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
           $(".hideActions").each(function() {
               if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
           });
           copy.addClass("pointNo").removeClass("pointThis text5");
           cut.addClass("pointNo").removeClass("pointThis text5");
        }
        $(".allBoxes").prop("checked", count.length == $("#list .zCheckbox").length ? true : false);
    }

    $("#actions").on("click", ".delete", function() {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
",
            data: { "do": "delete", file: $(this).attr("data-file"), xsrf: XSRF},
            error: function(e) {
                list();
                $(".hideActions").each(function() {
                    if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
                });
            },
            dataType: "json"
        });
        return false;
    });

    $("#actions").on("click", ".paste", function() {
        var action = $(this).attr("data-action");
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
",
            data: { "do": "paste", file: $(this).attr("data-file"), xsrf: XSRF, action: action, location: $("#hashchange").val()},
            error: function() {
                list();
                $(".hideActions").each(function() {
                    if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
                });
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
             text: '<?php echo smarty_function_zThis(array('z'=>"Files successfully copied."),$_smarty_tpl);?>
',
             duration: 3000,
         }).showToast();
    });

    $("#actions").on("click", ".cut", function() {
        var data = $(this).attr("data-file");
        $("#copy_files").val(data);
        $("#actions").find(".paste").removeClass("pointNo").addClass("pointThis text5")
                     .attr("data-action", "cut").attr("data-file", data);
        Toastify({
            text: '<?php echo smarty_function_zThis(array('z'=>"Files successfully cut."),$_smarty_tpl);?>
',
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
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
",
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
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
",
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

    <?php if ($_smarty_tpl->tpl_vars['allow_upload']->value) {?>
    $("input[type=file]").change(function(e) {
        e.preventDefault();
        $.each(this.files,function(k,file) {
            uploadFile(file);
        });
    });
    function uploadFile(file) {
        var folder = $("#hashchange").val().substr(1);

        if (file.size > MAX_UPLOAD_SIZE) {
            var $error_row = renderFileSizeErrorRow(file,folder);
            $("#upload_progress").append($error_row);
            window.setTimeout(function(){ $error_row.fadeOut();},5000);
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
        xhr.open("POST", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
");
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
    <?php }?>

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
                !data.results.length && $tbody.append('<tr><td class="empty" colspan=5><?php echo smarty_function_zThis(array('z'=>"This folder is empty."),$_smarty_tpl);?>
</td></tr>')
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
            .text(data.name == "hidden_drive" ? "<?php echo smarty_function_zThis(array('z'=>'Hidden drive'),$_smarty_tpl);?>
" : data.name).attr("data-file", data.path).attr("type", data.is_dir ? "dir" : "file");
        var allow_direct_link = '<?php if ($_smarty_tpl->tpl_vars['allow_direct_link']->value) {?>true<?php } else { ?>false<?php }?>'
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
            $html = $('<div/>').append( $('<a href=#><?php echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
</a></div>') );
        $.each(path.split("/"),function(k,v){
            if(v) {
                var v_as_text = v;
                $html.append( $('<span/>').html(' <i class="fas fa-caret-right"></i> ') )
                    .append( $('<a/>').attr("href", "#").attr('data-href','#'+base+v).text(v_as_text == "hidden_drive" ? "<?php echo smarty_function_zThis(array('z'=>'Hidden drive'),$_smarty_tpl);?>
" : v_as_text) );
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
            "url": "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/apexcharts/locales/<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
.json",
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
    // Trigger action when the contexmenu is about to be shown
    $("#zContent").on("contextmenu", function (event) {

        // Avoid the real one
        event.preventDefault();

        // Show contextmenu
        $(".custom-menu").finish().toggle(100).

        // In the right position (the mouse)
        css({
            top: event.pageY - 32 + "px",
            left: event.pageX - 332 + "px"
        });
    });


    // If the document is clicked somewhere
    $("#zContent").on("mousedown", function (e) {

        // If the clicked element is not the menu
        if (!$(e.target).parents(".custom-menu").length > 0) {

            // Hide it
            $(".custom-menu").hide(100);
        }
    });


    // If the menu element is clicked
    $(".custom-menu li").click(function(){
        // This is the triggered action name
        switch($(this).attr("data-action")) {

            // A case for each action. Your actions here
            case "first": alert("first"); break;
            case "second": alert("second"); break;
            case "third": alert("third"); break;
        }

        // Hide it AFTER the action was triggered
        $(".custom-menu").hide(100);
    });

    functionIsRunning = true;
}

var functionIsRunning = false;

$(document).ready(function() {
    if (!functionIsRunning) {
        zPageJS_media();
    }
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
