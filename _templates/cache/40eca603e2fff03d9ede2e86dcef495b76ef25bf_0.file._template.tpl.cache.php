<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:08:42
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/preferences/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186eeda340036_02464174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40eca603e2fff03d9ede2e86dcef495b76ef25bf' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/preferences/_template.tpl',
      1 => 1633364607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6186eeda340036_02464174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '20292572316186eeda304ec0_89278490';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16816959196186eeda3205d7_33306108', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11014067556186eeda33eea1_88058170', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zContent"} */
class Block_16816959196186eeda3205d7_33306108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_16816959196186eeda3205d7_33306108',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <section class="whiteBack rad-15 pad-20 font-16">
        <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Site Settings"),$_smarty_tpl);?>
</h4>
        <form id="zUser-preferences-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
            <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

            <div class="col-12">
                <div class="zGroup">
                    <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                        <?php echo smarty_function_zThis(array('z'=>"Site Name"),$_smarty_tpl);?>

                    </span>
                    <input type="text" class="pad-10 top-0 bottom-0" value="<?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
"
                        aria-label="Username" aria-describedby="basic-addon1" name="site_name">
                </div>
                <div class="padTB-15">
                    <input class="zSwitch" type="checkbox" name="enabledSite" id="enabledSite"
                    <?php if ($_smarty_tpl->tpl_vars['z']->value->status == "enabled") {?>value="enabled" checked<?php }?>>
                    <label for="enabledSite">
                        <?php if ($_smarty_tpl->tpl_vars['z']->value->status == "enabled") {?>
                            <?php echo smarty_function_zThis(array('z'=>"Disable site"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_zThis(array('z'=>"Enable site"),$_smarty_tpl);?>

                        <?php }?>
                    </label>
                    <span class="enable displayNone"><?php echo smarty_function_zThis(array('z'=>"Enable site"),$_smarty_tpl);?>
</span>
                    <span class="disable displayNone"><?php echo smarty_function_zThis(array('z'=>"Disable site"),$_smarty_tpl);?>
</span>
                    <div class="font-13"><?php echo smarty_function_zThis(array('z'=>"This option will determine whether your website should be open to the internet or not. If this is disabled, the system will recognise your IP and let you see the website, but others will not."),$_smarty_tpl);?>
</div>
                </div>
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <h6 class="bottom-0 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"404 Error Page"),$_smarty_tpl);?>
</h6>
                <div class="padTB-15">
                    <input class="zSwitch" type="checkbox" name="error_page" id="error_page"
                    value="<?php if ($_smarty_tpl->tpl_vars['z']->value->error == "enabled") {?>enabled<?php } else { ?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['z']->value->error == "enabled") {?>checked<?php }?>>
                    <label for="error_page">
                        <?php if ($_smarty_tpl->tpl_vars['z']->value->error == "enabled") {?>
                            <?php echo smarty_function_zThis(array('z'=>"Disable 404 error page"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_zThis(array('z'=>"Enable 404 error page"),$_smarty_tpl);?>

                        <?php }?>
                    </label>
                    <span class="enable displayNone"><?php echo smarty_function_zThis(array('z'=>"Enable 404 error page"),$_smarty_tpl);?>
</span>
                    <span class="disable displayNone"><?php echo smarty_function_zThis(array('z'=>"Disable 404 error page"),$_smarty_tpl);?>
</span>
                    <div class="font-13"><?php echo smarty_function_zThis(array('z'=>"This option will determine whether your website should display a 404 error page, or redirect to homepage when an unknown url entered."),$_smarty_tpl);?>
</div>
                </div>
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <h6 class="bottom-0 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Enable or Disable Languages on Frontend"),$_smarty_tpl);?>
</h6>
                <div class="padTB-15">
                    <?php $_smarty_tpl->_assignInScope('alllangs', $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs());?>
                    <ul class="cleanList nextToEach bottom-10">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alllangs']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                        <li style="padding-left: 0">
                            <div>
                                <input type="checkbox" id="language<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
" name="languages[]" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
"
                                    <?php if (!$_smarty_tpl->tpl_vars['lang']->value->disabled) {?>checked<?php }?>>
                                <label for="language<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>
</label>
                            </div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
                <?php echo '<script'; ?>
>
                $(".zSwitch").change(function() {
                    var value = $(this).val();
                    var enText = $(this).parent().find(".enable").text();
                    var disText = $(this).parent().find(".disable").text();
                    if (value == "disabled") {
                        $(this).next("label").text(disText);
                        $(this).val("enabled");
                    } else {
                        $(this).next("label").text(enText);
                        $(this).val("disabled");
                    }
                });
                <?php echo '</script'; ?>
>
                <button id="btnSubmit" class="zButton primary widthAll zShadow"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </div>
        </form>
    </section>
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_11014067556186eeda33eea1_88058170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_11014067556186eeda33eea1_88058170',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function zPageJS() {
            // submit form functions
            $("#zUser-preferences-form").submit(function(e) {
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

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
