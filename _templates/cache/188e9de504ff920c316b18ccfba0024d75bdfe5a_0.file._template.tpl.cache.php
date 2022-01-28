<?php
/* Smarty version 3.1.40, created on 2022-01-27 13:31:57
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/profile/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61f29ecd712e59_51466248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '188e9de504ff920c316b18ccfba0024d75bdfe5a' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/profile/_template.tpl',
      1 => 1642852405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f29ecd712e59_51466248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '119478096361f29ecd6c9067_43133826';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164439718661f29ecd6e0fc4_86065550', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184725326561f29ecd710819_20533158', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zContent"} */
class Block_164439718661f29ecd6e0fc4_86065550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_164439718661f29ecd6e0fc4_86065550',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['editUser']->value) {
} else { ?>
        <?php $_smarty_tpl->_assignInScope('editUser', $_smarty_tpl->tpl_vars['zUser']->value);?>
    <?php }?>
    <div class="col-3 colTop padR-10 zMob-padB-20">
        <?php if ($_smarty_tpl->tpl_vars['zUser']->value->id !== $_smarty_tpl->tpl_vars['editUser']->value->id) {?>
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Change Rank"),$_smarty_tpl);?>
</h4>
            <form id="zUser-change-rank-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success5']->value,$_smarty_tpl->tpl_vars['error5']->value);?>

                <input name="id_user" id="id_user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->id;?>
" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-rank" style="display:none">
                <select class="pad-10 top-0 bottom-20" id="id_rank" name="id_rank">
                    <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                    <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetRanks($_smarty_tpl->tpl_vars['editUser']->value->id_lang,$_smarty_tpl->tpl_vars['editUser']->value->id_rank);?>

                </select>
                <button class="zButton primary widthAll zShadow"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </form>
        </div>
        <?php }?>
        <div class="whiteBack rad-15 pad-20 font-16 <?php if ($_smarty_tpl->tpl_vars['zUser']->value->id !== $_smarty_tpl->tpl_vars['editUser']->value->id) {?>top-20<?php }?>">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Change Avatar"),$_smarty_tpl);?>
</h4>
            <form id="zUser-change-avatar-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success3']->value,$_smarty_tpl->tpl_vars['error3']->value);?>

                <input name="id_user" id="id_user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->id;?>
" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-avatar" style="display:none">
                <div class="font0">
                    <div class="zCol-6 zMob990-zCol-4 padR-2">
                        <input type="radio" name="avatar[]" id="avatar1" class="avatar-input displayNone" value="1" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "1") {?>checked<?php }?>>
                        <label for="avatar1" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/1.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar2" class="avatar-input displayNone" value="2" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "2") {?>checked<?php }?>>
                        <label for="avatar2" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/2.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2 zMob990-padL-2">
                        <input type="radio" name="avatar[]" id="avatar3" class="avatar-input displayNone" value="3" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "3") {?>checked<?php }?>>
                        <label for="avatar3" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/3.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padR-2">
                        <input type="radio" name="avatar[]" id="avatar4" class="avatar-input displayNone" value="4" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "4") {?>checked<?php }?>>
                        <label for="avatar4" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/4.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar5" class="avatar-input displayNone" value="5" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "5") {?>checked<?php }?>>
                        <label for="avatar5" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/5.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2">
                        <input type="radio" name="avatar[]" id="avatar6" class="avatar-input displayNone" value="6" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "6") {?>checked<?php }?>>
                        <label for="avatar6" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/6.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2">
                        <input type="radio" name="avatar[]" id="avatar7" class="avatar-input displayNone" value="7" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "7") {?>checked<?php }?>>
                        <label for="avatar7" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/7.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar8" class="avatar-input displayNone" value="8" <?php if ($_smarty_tpl->tpl_vars['editUser']->value->id_picture == "8") {?>checked<?php }?>>
                        <label for="avatar8" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/8.jpg" style="float:left">
                        </label>
                    </div>
                    <?php echo '<script'; ?>
>
                        $(".avatar-input + label").css("cursor", "pointer");
                        $(".avatar-input:checked + label").css("border", "5px solid #3950a2");
                        $(".avatar-input:checked + label img").css("border", "2px solid #dce7f1");
                        $('input[type=radio]').change(function() {
                            $(".avatar-input + label").css("border", "none");
                            $(".avatar-input + label img").css("border", "none");
                            $(".avatar-input:checked + label").css("border", "5px solid #3950a2");
                            $(".avatar-input:checked + label img").css("border", "2px solid #dce7f1");
                        });
                    <?php echo '</script'; ?>
>
                </div>
                <button class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </form>
        </div>
    </div>
    <div class="col-9 padL-10 zMob-padB-20">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Change Language"),$_smarty_tpl);?>
</h4>
            <form id="zUser-change-language-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success4']->value,$_smarty_tpl->tpl_vars['error4']->value);?>

                <input name="id_user" id="id_user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->id;?>
" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-language" style="display:none">
                <div class="zGroup bottom-20">
                    <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                        <?php echo smarty_function_zThis(array('z'=>"Select Language"),$_smarty_tpl);?>

                    </label>
                    <select class="pad-10 top-0 bottom-0" id="id_lang" name="id_lang">
                        <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetLanguages($_smarty_tpl->tpl_vars['editUser']->value->id_lang);?>

                    </select>
                </div>
                <button class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Change Email"),$_smarty_tpl);?>
</h4>
            <form id="zUser-change-email-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success6']->value,$_smarty_tpl->tpl_vars['error6']->value);?>

                <input name="id_user" id="id_user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->id;?>
" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-email" style="display:none">
                <div class="bottom-20">
                    <input name="email_new" id="email_new" type="email" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Email"),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->email;?>
">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-envelope"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Change Name"),$_smarty_tpl);?>
</h4>
            <form id="zUser-change-name-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success1']->value,$_smarty_tpl->tpl_vars['error1']->value);?>

                <input name="id_user" id="id_user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->id;?>
" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-name" style="display:none">
                <div class="bottom-20">
                    <input name="name_new" id="name_new" type="text" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);?>
">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-user"></i>
                    </div>
                </div>
                <div class="bottom-20">
                    <input name="surname_new" id="surname_new" type="text" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Surname"),$_smarty_tpl);?>
">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-user"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Change Password"),$_smarty_tpl);?>
</h4>
            <form id="zUser-change-password-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success2']->value,$_smarty_tpl->tpl_vars['error2']->value);?>

                <input name="id_user" id="id_user" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value->id;?>
" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-password" style="display:none">
                <div class="bottom-20">
                    <input name="password" id="password" type="password" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Old Password"),$_smarty_tpl);?>
">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
                <div class="bottom-20">
                    <input name="password_new" id="password_new" type="password" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"New Password"),$_smarty_tpl);?>
">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Submit"),$_smarty_tpl);?>
</button>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_184725326561f29ecd710819_20533158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_184725326561f29ecd710819_20533158',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function zPageJS() {
            // submit form functions
            $(".zForm").submit(function(e) {
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
                var form_type = $(this).find("#form_type").val();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        <?php if ($_smarty_tpl->tpl_vars['zUser']->value->id == $_smarty_tpl->tpl_vars['editUser']->value->id) {?>
                        if (form_type == "change-name" || form_type == "change-avatar") {
                            $("#zUser").load(window.location.href + " #zUser > *");
                        }
                        <?php }?>
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
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
