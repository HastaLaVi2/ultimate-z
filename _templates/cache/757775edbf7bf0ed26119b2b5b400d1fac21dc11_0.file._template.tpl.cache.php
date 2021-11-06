<?php
/* Smarty version 3.1.39, created on 2021-11-06 13:44:15
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/media/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618686af685f71_68719108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '757775edbf7bf0ed26119b2b5b400d1fac21dc11' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/media/_template.tpl',
      1 => 1631105329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618686af685f71_68719108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1759989782618686af641ad9_57982541';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590610853618686af660ae1_05888283', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1652237427618686af667b29_28858828', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49789222618686af676d94_69731054', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_1590610853618686af660ae1_05888283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_1590610853618686af660ae1_05888283',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- filepond -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.css">
<?php
}
}
/* {/block "zHead"} */
/* {block "zContent"} */
class Block_1652237427618686af667b29_28858828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_1652237427618686af667b29_28858828',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="whiteBack rad-15 pad-20 font-16">
        <div class="top-20">
            <input type="file" class="filepond">
        </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file', false, 'key');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Delete File"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this file?"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mForm'=>"deleteFile()",'_mLabel'=>$_prefixVariable1,'_mHidden'=>"<input name='file_name' class='file_name' value='".((string)$_smarty_tpl->tpl_vars['file']->value)."'>",'_mTitle'=>$_prefixVariable2,'_mContent'=>$_prefixVariable3), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_49789222618686af676d94_69731054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_49789222618686af676d94_69731054',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <!-- filepond plugins -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-file-validate-size.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-file-validate-type.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-file-rename.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-image-preview.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.js"><?php echo '</script'; ?>
>

    <!-- filepond -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/locale/<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->four_code;?>
.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, summernote, filepond, filepondID) {
            // create a new formdata
            var data = new FormData();
            // send the page id to server, because we will create a folder for it
            if (filepond) {
                data.set("filepond", "true");
            }
            data.set("langcode", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
");
            // send the file to server
            data.append("fileToUpload", image);
            $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/upload.php",
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
            FilePond.setOptions(window["<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->four_code;?>
"]);

            // start the pond, filepond
            var loaded = $(".filepond").prev();
            var value = <?php echo json_encode($_smarty_tpl->tpl_vars['files']->value);?>
;
            if (value[0]) {
                var files = [];
                for (let i=0; i < value.length; i++) {
                    files.push({
                        source: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/"+value[i],
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
                    var c = <?php echo json_encode($_smarty_tpl->tpl_vars['files']->value);?>
;
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
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/delete.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(data) {
                    window.location.assign("#");
                    pond.removeFile(window.lastID);
                    Toastify({
                        text: "<?php echo smarty_function_zThis(array('z'=>"File has been deleted."),$_smarty_tpl);?>
",
                        duration: 3000
                    }).showToast();
                },
                error: function() {
                    window.location.assign("#");
                    Toastify({
                        text: "<?php echo smarty_function_zThis(array('z'=>"There was an error deleting your file."),$_smarty_tpl);?>
",
                        duration: 3000
                    }).showToast();
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
