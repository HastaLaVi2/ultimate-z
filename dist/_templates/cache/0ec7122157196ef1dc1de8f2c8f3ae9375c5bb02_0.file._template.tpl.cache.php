<?php
/* Smarty version 3.1.39, created on 2021-10-07 21:40:59
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/design/favicon/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f696b945e40_35556951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec7122157196ef1dc1de8f2c8f3ae9375c5bb02' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/design/favicon/_template.tpl',
      1 => 1633642854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f696b945e40_35556951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '282931241615f696b8a6601_67145993';
?>



<?php $_smarty_tpl->_assignInScope('desktopType', "same");
$_smarty_tpl->_assignInScope('desktopDiffer_bg', "#ffffff");
$_smarty_tpl->_assignInScope('desktopDiffer_rad', "0");
$_smarty_tpl->_assignInScope('desktopDiffer_size', "100");
$_smarty_tpl->_assignInScope('iosType', "same");
$_smarty_tpl->_assignInScope('iosDiffer_bg', "#ffffff");
$_smarty_tpl->_assignInScope('iosDiffer_size', "100");
$_smarty_tpl->_assignInScope('androidType', "same");
$_smarty_tpl->_assignInScope('androidDiffer_bg', "#ffffff");
$_smarty_tpl->_assignInScope('androidDiffer_size', "100");
$_smarty_tpl->_assignInScope('winType', "same");
$_smarty_tpl->_assignInScope('winDiffer_bg', "#2d89ef");
$_smarty_tpl->_assignInScope('macDiffer_bg', "#2d89ef");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1341149465615f696b8d8195_16588836', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_372162439615f696b8e05b1_91252770', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_614117520615f696b922503_69614685', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_1341149465615f696b8d8195_16588836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_1341149465615f696b8d8195_16588836',
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
class Block_372162439615f696b8e05b1_91252770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_372162439615f696b8e05b1_91252770',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageUrl.php','function'=>'smarty_function_zPageUrl',),1=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageName.php','function'=>'smarty_function_zPageName',),2=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <nav>
        <ol class="cleanList">
            <li><a href="<?php echo smarty_function_zPageUrl(array('ID'=>"17"),$_smarty_tpl);?>
" class="inLine font-16">
                <i class="fas fa-caret-left"></i>
                <?php echo smarty_function_zPageName(array('ID'=>"17"),$_smarty_tpl);?>

            </a></li>
        </ol>
    </nav>

    <div class="col-12">
        <div class="whiteBack rad-15 pad-20 font-16">
            <div>
                <input class="displayNone" value="<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
">
                <input type="file" class="filepond">
            </div>
            <form id="zPage-favicon-form" class="zForm favSettings displayNone" method="POST" role="form" action="">
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

                <!-- DESKTOP -->
                <div class="col-4 colTop">
                    <h6 class="bottom-10 top-10 font-1em"><?php echo smarty_function_zThis(array('z'=>"Desktop Browsers"),$_smarty_tpl);?>
</h6>
                    <p class="font-15 bottom-0"><?php echo smarty_function_zThis(array('z'=>"Normal Theme"),$_smarty_tpl);?>
</p>
                    <div class="rad-5 hideRest borderForm boldMin-1 bottom-10">
                        <div class="padT-8 boldSoW boldMin-5 boldNoT boldNoR boldNoL font0 left--25" style="background: #dee1e6;">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height:35px;margin-bottom:-1px;fill:white;"><defs><symbol id="chrome-tab-geometry-left" viewBox="0 0 150 36"><path d="M17 0h197v36H0v-2c4.5 0 9-3.5 9-8V8c0-4.5 3.5-8 8-8z"/></symbol><symbol id="chrome-tab-geometry-right" viewBox="0 0 150 36"><use xlink:href="#chrome-tab-geometry-left"/></symbol><clipPath id="crop"><rect class="mask" x="0"/></clipPath></defs><svg height="36px"><use xlink:href="#chrome-tab-geometry-left" width="214" height="36" class="chrome-tab-geometry"/></svg><g transform="scale(-1, 1)"><svg style="fill:white;left:-50px" width="52%" height="36px" x="-100%" y="0"><use xlink:href="#chrome-tab-geometry-right" width="214" height="36" class="chrome-tab-geometry"/></svg></g></svg>
                        </div>
                        <div class="floatingSpace top-15 left-50 font-18">
                            <div class="desktopIcon inLine hideRest verMid font-0 width-18 height-18 centerText index-10">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid">
                            </div>
                            <div class="inLine verMid width-120 hideRest" style="white-space:nowrap">
                                <?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>

                            </div>
                        </div>
                        <div class="floatingSpace left-215 top-12">
                            <i class="fas fa-times font-13"></i>
                        </div>
                    </div>
                    <p class="font-15 bottom-0"><?php echo smarty_function_zThis(array('z'=>"Dark Theme"),$_smarty_tpl);?>
</p>
                    <div class="rad-5 hideRest borderForm boldMin-1 bottom-10">
                        <div class="padT-8 boldMin-5 boldNoT boldNoR boldNoL font0 left--25" style="background: #26292b;border-color:#4a4d51;">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height:35px;margin-bottom:-1px;fill:#4a4d51;"><svg height="36px"><use xlink:href="#chrome-tab-geometry-left" width="214" height="36" class="chrome-tab-geometry"/></svg><g transform="scale(-1, 1)"><svg style="fill:#4a4d51;left:-50px" width="52%" height="36px" x="-100%" y="0"><use xlink:href="#chrome-tab-geometry-right" width="214" height="36" class="chrome-tab-geometry"/></svg></g></svg>
                        </div>
                        <div class="floatingSpace color-white top-15 left-50 font-18">
                            <div class="desktopIcon inLine hideRest verMid font-0 width-18 height-18 centerText index-10">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid">
                            </div>
                            <div class="inLine verMid width-120 hideRest" style="white-space:nowrap">
                                <?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>

                            </div>
                        </div>
                        <div class="floatingSpace left-215 top-12">
                            <i class="fas fa-times gray2 font-13"></i>
                        </div>
                    </div>
                </div>
                <div class="col-8 colTop padL-20 zMob-padL-0">
                    <h6 class="bottom-10 top-10 font-1em"><?php echo smarty_function_zThis(array('z'=>"Search Engines"),$_smarty_tpl);?>
</h6>
                    <div class="rad-5 hideRest borderForm boldMin-1 bottom-10 font-15 pad-15">
                        <div class="font-12">
                            <div class="desktopIcon inLine hideRest verMid font-0 width-18 height-18 centerText index-10">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid">
                            </div>
                            <?php echo ltrim(ltrim($_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"],"https://"),"http://");?>

                        </div>
                        <div class="text5 boldText"><?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
</div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut iaculis ante. Nullam tempor laoreet orci, id efficitur augue interdum convallis. Maecenas...
                    </div>
                </div>
                <div class="padTB-15">
                    <div>
                        <input type="radio" name="desktopType" value="same" id="desktopSame" <?php if ($_smarty_tpl->tpl_vars['desktopType']->value == "same") {?>checked<?php }?>>
                        <label for="desktopSame"><?php echo smarty_function_zThis(array('z'=>"Use the original image."),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="bottom-10">
                        <input type="radio" name="desktopType" value="differ" id="desktopDiffer" <?php if ($_smarty_tpl->tpl_vars['desktopType']->value == "differ") {?>checked<?php }?>>
                        <label for="desktopDiffer"><?php echo smarty_function_zThis(array('z'=>"Add margins and background."),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['desktopType']->value !== "differ") {?>displayNone<?php }?> desktopDifferDiv">
                        <div class="col-4 colTop">
                            <div class="zGroup">
                                <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                                    <?php echo smarty_function_zThis(array('z'=>"Background"),$_smarty_tpl);?>

                                </span>
                                <input type="text" class="pad-10 top-0 bottom-0" value="<?php echo $_smarty_tpl->tpl_vars['desktopDiffer_bg']->value;?>
" name="desktopDiffer_bg">
                            </div>
                        </div>
                        <div class="col-4 colTop padL-20 zMob-pad-0">
                            <div class="zGroup">
                                <span class="pad-10 text6"><?php echo smarty_function_zThis(array('z'=>"Background Radius"),$_smarty_tpl);?>
</span>
                                <input type="range" min="0" step="5" max="50" value="<?php echo $_smarty_tpl->tpl_vars['desktopDiffer_rad']->value;?>
" name="desktopDiffer_rad">
                            </div>
                        </div>
                        <div class="col-4 colTop padL-20 zMob-pad-0">
                            <div class="zGroup">
                                <span class="pad-10 text6"><?php echo smarty_function_zThis(array('z'=>"Image Size"),$_smarty_tpl);?>
</span>
                                <input type="range" min="50" step="10" max="100" value="<?php echo $_smarty_tpl->tpl_vars['desktopDiffer_size']->value;?>
" name="desktopDiffer_size">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DESKTOP -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- iOS -->
                <h6 class="bottom-10 top-10 font-18"><?php echo smarty_function_zThis(array('z'=>"iOS Icon"),$_smarty_tpl);?>
</h6>
                <p class="font-15"><?php echo smarty_function_zThis(array('z'=>"iPhone and iPad users can pin your web site on their home screen. The link looks like a native app."),$_smarty_tpl);?>
</p>
                <div class="width-356 inLine bottom-15">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/user/ios.png" class="widthAll rad-5 back-black">
                    <div class="floatingSpace">
                        <div class="iosIcon top-108 left-109 hideRest verMid font-0 width-56 height-56 rad-11 centerText index-10">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid">
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <div>
                        <input type="radio" name="iosType" value="same" id="iosSame" <?php if ($_smarty_tpl->tpl_vars['iosType']->value == "same") {?>checked<?php }?>>
                        <label for="iosSame"><?php echo smarty_function_zThis(array('z'=>"Use the original image."),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="bottom-10">
                        <input type="radio" name="iosType" value="differ" id="iosDiffer" <?php if ($_smarty_tpl->tpl_vars['iosType']->value == "differ") {?>checked<?php }?>>
                        <label for="iosDiffer"><?php echo smarty_function_zThis(array('z'=>"Add margins and background."),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['iosType']->value !== "differ") {?>displayNone<?php }?> iosDifferDiv">
                        <div class="col-6 colTop">
                            <div class="zGroup">
                                <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                                    <?php echo smarty_function_zThis(array('z'=>"Background"),$_smarty_tpl);?>

                                </span>
                                <input type="text" class="pad-10 top-0 bottom-0" value="<?php echo $_smarty_tpl->tpl_vars['iosDiffer_bg']->value;?>
" name="iosDiffer_bg">
                            </div>
                        </div>
                        <div class="col-6 colTop padL-20 zMob-pad-0">
                            <div class="zGroup">
                                <span class="pad-10 text6"><?php echo smarty_function_zThis(array('z'=>"Image Size"),$_smarty_tpl);?>
</span>
                                <input type="range" min="50" step="10" max="100" value="<?php echo $_smarty_tpl->tpl_vars['iosDiffer_size']->value;?>
" name="iosDiffer_size">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- iOS -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- ANDROID -->
                <h6 class="bottom-10 top-10 font-18"><?php echo smarty_function_zThis(array('z'=>"Android Chrome Icon"),$_smarty_tpl);?>
</h6>
                <p class="font-15"><?php echo smarty_function_zThis(array('z'=>"Add to Homescreen is a also a feature of Android Chrome."),$_smarty_tpl);?>
</p>
                <div class="width-356 inLine bottom-15">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/user/android.png" class="widthAll rad-5 back-black">
                    <div class="floatingSpace">
                        <div class="androidIcon verMid font-0 top-32 left-85 width-50 height-50 centerText index-10">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid">
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <div>
                        <input type="radio" name="androidType" value="same" id="androidSame" <?php if ($_smarty_tpl->tpl_vars['androidType']->value == "same") {?>checked<?php }?>>
                        <label for="androidSame"><?php echo smarty_function_zThis(array('z'=>"Use the original image."),$_smarty_tpl);?>
</label>
                    </div>
                    <div>
                        <input type="radio" name="androidType" value="differ" id="androidDiffer" <?php if ($_smarty_tpl->tpl_vars['androidType']->value == "differ") {?>checked<?php }?>>
                        <label for="androidDiffer"><?php echo smarty_function_zThis(array('z'=>"Add margins and background."),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['androidType']->value !== "differ") {?>displayNone<?php }?> androidDifferDiv">
                        <div class="col-6 colTop padTB-10">
                            <div class="zGroup">
                                <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                                    <?php echo smarty_function_zThis(array('z'=>"Background"),$_smarty_tpl);?>

                                </span>
                                <input type="text" class="pad-10 top-0 bottom-0" value="<?php echo $_smarty_tpl->tpl_vars['androidDiffer_bg']->value;?>
" name="androidDiffer_bg">
                            </div>
                        </div>
                        <div class="col-6 colTop padL-20 zMob-pad-0 padTB-10">
                            <div class="zGroup">
                                <span class="pad-10 text6"><?php echo smarty_function_zThis(array('z'=>"Image Size"),$_smarty_tpl);?>
</span>
                                <input type="range" min="50" step="10" max="100" value="<?php echo $_smarty_tpl->tpl_vars['androidDiffer_size']->value;?>
" name="androidDiffer_size">
                            </div>
                        </div>
                    </div>
                    <div class="bottom-10">
                        <input type="radio" name="androidType" value="shadow" id="androidShadow" <?php if ($_smarty_tpl->tpl_vars['androidType']->value == "shadow") {?>checked<?php }?>>
                        <label for="androidShadow"><?php echo smarty_function_zThis(array('z'=>"Apply a slight drop shadow."),$_smarty_tpl);?>
</label>
                    </div>
                </div>
                <!-- ANDROID -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- WINDOWS -->
                <h6 class="bottom-10 top-10 font-18"><?php echo smarty_function_zThis(array('z'=>"Windows 8 and 10 Icon"),$_smarty_tpl);?>
</h6>
                <p class="font-15"><?php echo smarty_function_zThis(array('z'=>"Windows 8 and 10 users can pin your web site on their start menu."),$_smarty_tpl);?>
</p>
                <div class="width-356 inLine bottom-15">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/user/windows.png" class="widthAll rad-5 back-black">
                    <div class="floatingSpace">
                        <div class="winIcon verMid font-0 top-23 left-17_5 width-79 height-79 centerText index-10" style="background:#2d89ef;">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid" style="width:70%;<?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);<?php }?>">
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <p class="font-15"><?php echo smarty_function_zThis(array('z'=>"Preferably, choose one suggested for the Windows Metro UI."),$_smarty_tpl);?>
</p>
                    <div class="zGroup bottom-10">
                        <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                            <?php echo smarty_function_zThis(array('z'=>"Background"),$_smarty_tpl);?>

                        </span>
                        <input type="text" class="pad-10 top-0 bottom-0 minW-150" value="<?php echo $_smarty_tpl->tpl_vars['winDiffer_bg']->value;?>
" name="winDiffer_bg">
                    </div>
                    <div class="zGroup bottom-10">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#00aba9" style="height:auto;background:#00aba9;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#2b5797" style="height:auto;background:#2b5797;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#9f00a7" style="height:auto;background:#9f00a7;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#603cba" style="height:auto;background:#603cba;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#b91d47" style="height:auto;background:#b91d47;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#da532c" style="height:auto;background:#da532c;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#ffc40d" style="height:auto;background:#ffc40d;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#00a300" style="height:auto;background:#00a300;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#2d89ef" style="height:auto;background:#2d89ef;" name="winDiffer_winbg">
                    </div>
                    <div>
                        <input type="radio" name="winType" value="same" id="winSame" <?php if ($_smarty_tpl->tpl_vars['winType']->value == "same") {?>checked<?php }?>>
                        <label for="winSame"><?php echo smarty_function_zThis(array('z'=>"Use the original image."),$_smarty_tpl);?>
</label>
                    </div>
                    <div>
                        <input type="radio" name="winType" value="white" id="winWhite" <?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>checked<?php }?>>
                        <label for="winWhite"><?php echo smarty_function_zThis(array('z'=>"Use white logo, for transparent background logos."),$_smarty_tpl);?>
</label>
                    </div>
                </div>
                <!-- WINDOWS -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- macOS SAFARI -->
                <h6 class="bottom-10 top-10 font-18"><?php echo smarty_function_zThis(array('z'=>"macOS Safari Icon"),$_smarty_tpl);?>
</h6>
                <p class="font-15"><?php echo smarty_function_zThis(array('z'=>"Safari implements pinned tabs and takes advantage of the MacBook Touch Bar. This feature relies on an SVG icon."),$_smarty_tpl);?>
</p>
                <div class="width-220 inLine bottom-15">
                    <p class="bottom-0"><?php echo smarty_function_zThis(array('z'=>"Pinned Tab, No Focus"),$_smarty_tpl);?>
</p>
                    <div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/user/macos1.png" class="widthAll rad-5 back-black">
                        <div class="floatingSpace">
                            <div class="macIcon2 verMid font-0 top-10 left-95 width-30 height-30 centerText index-10">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="widthAll hollyMid" style="-webkit-filter:invert(46%) sepia(17%) saturate(16%) hue-rotate(318deg) brightness(100%) contrast(90%);filter: invert(46%) sepia(17%) saturate(16%) hue-rotate(318deg) brightness(100%) contrast(90%);">
                            </div>
                        </div>
                    </div>
                    <p class="bottom-0"><?php echo smarty_function_zThis(array('z'=>"Pinned Tab, With Focus"),$_smarty_tpl);?>
</p>
                    <div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/user/macos2.png" class="widthAll rad-5 back-black">
                        <div class="floatingSpace">
                            <div class="macIcon verMid font-0 top-10 left-95 width-30 height-30 centerText index-10" style="-webkit-mask-image:url(<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png);mask-image:url(<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png);mask-mode:alpha;-webkit-mask-mode:alpha;-webkit-mask-size:30px;mask-size:30px;background:#2d89ef;">
                            </div>
                        </div>
                    </div>
                    <p class="bottom-0"><?php echo smarty_function_zThis(array('z'=>"Touch Bar"),$_smarty_tpl);?>
</p>
                    <div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/user/macos3.png" class="widthAll rad-5 back-black">
                        <div class="floatingSpace">
                            <div class="macIcon verMid font-0 top-7 left-74 width-73 rad-8 height-36 centerText index-10" style="background:#2d89ef;">
                                <div class="width-20 height-20 hollyMid horMid" style="-webkit-mask-image:url(<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png);mask-image:url(<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png);mask-mode:alpha;-webkit-mask-mode:alpha;-webkit-mask-size:20px;mask-size:30px;background:white;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <div class="zGroup bottom-10">
                        <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                            <?php echo smarty_function_zThis(array('z'=>"Theme Color"),$_smarty_tpl);?>

                        </span>
                        <input type="text" class="pad-10 top-0 bottom-0 minW-150" value="<?php echo $_smarty_tpl->tpl_vars['macDiffer_bg']->value;?>
" name="macDiffer_bg">
                    </div>
                </div>
                <!-- macOS SAFARI -->
                <button class="zButton primary widthAll zShadow top-20"><?php echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);?>
</button>
            </form>
        </div>
    </div>
    <?php ob_start();
echo smarty_function_zThis(array('z'=>"Delete File"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this file?"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mForm'=>"deleteFavicon()",'_mLabel'=>'fav','_mTitle'=>$_prefixVariable1,'_mContent'=>$_prefixVariable2), 0, true);
?>
    <?php ob_start();
echo smarty_function_zThis(array('z'=>"Creating Files"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Wait until your files created..."),$_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mLabel'=>'upload','_mTitle'=>$_prefixVariable3,'_mContent'=>$_prefixVariable4,'_noClose'=>true), 0, true);
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_614117520615f696b922503_69614685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_614117520615f696b922503_69614685',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="winSet displayNone">
        <div class="winIcon inLine colTop hideRest font-0 centerText width-70 height-70" size="70">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="hollyMid" style="width:70%;<?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);<?php }?>">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-144 height-144" size="144">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="hollyMid" style="height:100%;<?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);<?php }?>">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-150 height-150" size="150">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="hollyMid padT-25 padB-50" style="height:100%;<?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);<?php }?>">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-310 height-310" size="310">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="hollyMid padT-70 padB-95" style="height:100%;<?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);<?php }?>">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-310 height-150" size="310x150">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png" class="hollyMid padT-28 padB-52" style="height:100%;<?php if ($_smarty_tpl->tpl_vars['winType']->value == "white") {?>-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);<?php }?>">
        </div>
    </div>
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
        /*
            FAVICON
        */

        // helper functions
        function bg(type) {
            if ($("input[name="+type+"Differ_bg]").length) {
                var value = $("input[name="+type+"Differ_bg]").val();
                $("."+type+"Icon").each(function() {
                    if (type == "win" && $(this).parent().hasClass(type+"Set")) {} else {
                        $(this).css("background", value);
                    }
                });
            }
        }
        function radius(type) {
            if ($("input[name="+type+"Differ_rad]").length) {
                var value = $("input[name="+type+"Differ_rad]").val();
                $("."+type+"Icon").css("border-radius", value+"%");
            }
        }
        function size(type) {
            if ($("input[name="+type+"Differ_size]").length) {
                var value = $("input[name="+type+"Differ_size]").val();
                $("."+type+"Icon img").attr("style", "width: "+value+"% !important");
            }
        }
        function check(type) {
            if ($("."+type+"DifferDiv").css("display") == "block") {
                bg(type);
                size(type);
                radius(type);
            } else {
                $("."+type+"Icon").attr("style", "");
                $("."+type+"Icon img").attr("style", "");
            }
            if ($("input[name="+type+"Type]:checked").prop("id") == type+"Shadow") {
                $("."+type+"Icon img").attr("style", "width:70%;filter:drop-shadow(0 0 2px rgba(0,0,0,.5));");
            }
        }

        function usefullNess() {
            // DESKTOP
            $("input[name=desktopType]").click(function() {
                if ($(this).prop("id") == "desktopDiffer") {
                    $(".desktopDifferDiv").show();
                } else {
                    $(".desktopDifferDiv").hide();
                }
                check("desktop");
            });
            $("input[name=desktopDiffer_bg]").keyup(function() {
                bg("desktop");
            });
            $("input[name=desktopDiffer_rad]").change(function() {
                radius("desktop");
            });
            $("input[name=desktopDiffer_size]").change(function() {
                size("desktop");
            });

            // iOS
            $("input[name=iosType]").click(function() {
                if ($(this).prop("id") == "iosDiffer") {
                    $(".iosDifferDiv").show();
                } else {
                    $(".iosDifferDiv").hide();
                }
                check("ios");
            });
            $("input[name=iosDiffer_bg]").keyup(function() {
                bg("ios");
            });
            $("input[name=iosDiffer_size]").change(function() {
                size("ios");
            });

            // Android
            $("input[name=androidType]").click(function() {
                if ($(this).prop("id") == "androidDiffer") {
                    $(".androidDifferDiv").show();
                } else {
                    $(".androidDifferDiv").hide();
                }
                check("android");
            });
            $("input[name=androidDiffer_bg]").keyup(function() {
                bg("android");
            });
            $("input[name=androidDiffer_size]").change(function() {
                size("android");
            });

            // Windows
            $("input[name=winType]").click(function() {
                if ($(this).prop("id") == "winWhite") {
                    $(".winIcon img").css("-webkit-filter", "brightness(0) invert(1)")
                                     .css("filter", "brightness(0) invert(1)");
                } else {
                    $(".winIcon img").css("-webkit-filter", "none")
                                     .css("filter", "none");
                }
            });
            $("input[name=winDiffer_winbg]").click(function() {
                var value = $(this).val();

                $("input[name=winDiffer_bg]").val(value);
                bg("win");
            });
            $("input[name=winDiffer_bg]").keyup(function() {
                bg("win");
            });
            bg("win");

            // macOS
            $("input[name=macDiffer_bg]").keyup(function() {
                bg("mac");
            });
            bg("mac");

            check("desktop");
            check("ios");
            check("android");
        }

        function partial(type) {
            if (type == "mac") {
                $("."+type+"Icon div").css("-webkit-mask-image", "url(<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png)");
                $("."+type+"Icon div").css("mask-image", "url(<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png)");
                $("."+type+"Icon2 img").attr("src", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png");
            } else {
                $("."+type+"Icon img").attr("src", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png");
            }
        }

        function proceed() {
            $(".favSettings").removeClass("displayNone");
            partial("desktop");
            partial("ios");
            partial("android");
            partial("win");
            partial("mac");
        }

        function deleteImage(filename) {
            var data = new FormData();
            data.set("file_name", filename);
            $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/deleteInd.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(data) { },
                error: function() { }
            });
        }

        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, name, filepond, filepondID) {
            // create a new formdata
            var data = new FormData();
            data.set("langcode", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
");
            data.set("filename", name);
            data.set("pathToHere", '<?php ob_start();
echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
$_prefixVariable5 = ob_get_clean();
echo ltrim(ltrim(ltrim($_smarty_tpl->tpl_vars['zContent']->value->current,"https://"),"http://"),$_prefixVariable5);?>
');
            // send the file to server
            data.append("fileToUpload", image);
            $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/upload.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(filename) {
                    if (filepond) {
                        $(filepond).find("#filepond--item-" + filepondID).find("legend").text("favicon.png");
                        $(filepond).find("#filepond--item-" + filepondID).find(".filepond--file-info-main").text("favicon.png");
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

        // catch hidden images to favicon folder
        function dataURLtoFile(dataurl, filename) {
           var arr = dataurl.split(','),
               mime = arr[0].match(/:(.*?);/)[1],
               bstr = atob(arr[1]),
               n = bstr.length,
               u8arr = new Uint8Array(n);

           while (n--) {
               u8arr[n] = bstr.charCodeAt(n);
           }
           return new File([u8arr], filename, {
               type:mime});
        }

        function uploadForWin(size) {
            if (typeof(size) == "object") {
                swidth = size[0];
                sheight = size[1];
            } else {
                swidth = size;
                sheight = size;
            }
            let filename = "mstile-" + swidth + "x" + sheight;
            ImageTracer.imageToSVG(
                "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/"+filename+".png", /* input filename / URL */
                function(svgstr){
                    var black = svgstr.replaceAll(/rgb\(([^)]+)\)/gi, "white");
                    var blackF = new File([black], filename+".svg", {
                        type: "image/svg+xml",
                    });
                    uploadImage(blackF, filename);
                } /* callback function to run on SVG string result */
            );
            setTimeout(function(){
                $.get("<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/"+filename+".svg", function(data) {
                    var svgString = new XMLSerializer().serializeToString(data.documentElement);

                    var canvas = document.createElement("canvas");
                    var ctx = canvas.getContext("2d");
                    var img = new Image();
                    var svg = new Blob([svgString], { type: "image/svg+xml;charset=utf-8"});
                    img.onload = function() {
                        canvas.height = filename.replace("mstile-", "").split("x")[1];
                        canvas.width = filename.replace("mstile-", "").split("x")[0];
                        ctx.drawImage(img, 0, 0);
                        var png = canvas.toDataURL("image/png");
                        let file = dataURLtoFile(png, filename+".png");
                        uploadImage(file, filename);
                        deleteImage(filename+".svg");
                    };
                    img.src = "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/"+filename+".svg";
                });
            }, 3000);
        }

        function createFinalImg(element, prefix, suffix, sizes, back) {
            html2canvas(element, {
              scale: 10,
              backgroundColor: (back ? back : "rgba(0, 0, 0, 0)"), removeContainer: true
            }).then(canvas => {
                (function(next) {
                    var favicon = new Image;
                    favicon.src = "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png";
                    favicon.onload = function() {
                        let newC = document.createElement("canvas");
                        $.each(sizes, function(unn, size) {
                            let type = (prefix == "favicon" && size == "48") ? "ico" : "png";
                            if (typeof(size) == "object") {
                                sw = size[0];
                                sh = size[1];
                            } else {
                                sw = size;
                                sh = size;
                            }
                            if (sw <= favicon.width && sh <= favicon.height) {
                                let filename = prefix + (type == "ico" ? "" : "-" + sw + "x" + sh) + (suffix ? "-" + suffix : "");
                                newC.width = sw;
                                newC.height = sh;
                                newC.getContext("2d").fillStyle = "white";
                                newC.getContext("2d").drawImage(canvas, 0, 0, sw, sh);
                                let img = newC.toDataURL("image/" + type);
                                let file = dataURLtoFile(img, filename + "." + type);
                                uploadImage(file, filename);
                                if (prefix == "apple-touch-icon" && !sizes[unn+1]) {
                                    uploadImage(file, "apple-touch-icon" + (suffix ? "-" + suffix : ""));
                                }
                            }
                        });
                    };
                }(function() {
                    if (prefix == "mstile" && $("#winWhite").is(":checked")) {
                        uploadForWin(size);
                    }
                }));
            });
        }

        function renderEverything(callback) {
            let sets = [];
            sets[0] = [$(".desktopIcon")[0], "favicon", [16, 32, 48]];
            sets[1] = [$(".iosIcon")[0], "apple-touch-icon", [57, 60, 72, 76, 114, 120, 144, 152, 180]];
            sets[2] = [$(".androidIcon")[0], "android-chrome", [36, 48, 72, 96, 144, 192, 256, 384, 512]];
            sets[3] = [$(".winIcon")[0], "mstile", [70, 144, 150, 310, [310, 150] ]];

            $.each(sets, function (i, v) {
                // for iOS, we have precomposed versions
                if (i == 1) {
                    let back = $(v[0]).clone().css("background-color");
                    createFinalImg(v[0], v[1], null, v[2], back);
                    createFinalImg(v[0], v[1], "precomposed", v[2]);
                } else if (i == 3) {
                    let winset = $(".winSet");
                    winset.removeClass("displayNone");
                    winset.children().each(function(i) {
                        let sizes = [];
                        sizes[0] = v[2][i];
                        createFinalImg($(this)[0], v[1], null, sizes);
                    });
                    winset.addClass("displayNone");
                } else {
                    createFinalImg(v[0], v[1], null, v[2]);
                }
            });

            if (typeof callback == "function")
                callback();
        }

        function zPageJS() {
            usefullNess();

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
            var value = <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["favicon"])."/favicon.png")) {?>true<?php } else { ?>null<?php }?>;
            if (value) {
                $(".favSettings").removeClass("displayNone");
                var files = [];
                files.push({
                    source: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png",
                    options: {
                        type: "local"
                    }
                });
                var load = {
                    load: (uniqueFileId, load) => {
                        // you would get the file data from your server here
                        fetch(uniqueFileId)
                        .then(res => res.blob())
                        .then(load);
                    }
                };
                proceed();
            }
            pond = FilePond.create(document.querySelector(".filepond"), {
                allowImagePreview: true,
                maxFileSize: "20MB",
                fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                    // Do custom type detection here and return with promise
                    resolve(type);
                }),
                files: (files ? files : null),
                server: (load ? load : null),
                beforeRemoveFile: function(item) {
                    window.location.assign("#modalfav");
                    return false;
                }
            });

            // set filepond server
            FilePond.setOptions({
                server: "./",
            });

            // callbacks for filepond
            $(".filepond").each(function() {
                // when a file added in a filepond, we will have to upload it
                // to server
                $(this).on("FilePond:processfilestart", function(e) {
                    // calling the uploading service
                    uploadImage(e.detail.file.file, "favicon", e.target, e.detail.file.id);
                });

                $(this).on("FilePond:processfile", function(e) {
                    // Loading an image, tracing with the 'posterized2' option preset, and appending the SVG to an element with id="svgcontainer"
                    ImageTracer.imageToSVG(
                    	"<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.png", /* input filename / URL */
                    	function(svgstr){
                            var black = svgstr.replaceAll(/rgb\(([^)]+)\)/gi, "black");
                            var blackF = new File([black], "safari-pinned-tab.svg", {
                                type: "image/svg+xml",
                            });
                            uploadImage(blackF, "safari-pinned-tab");
                        } /* callback function to run on SVG string result */
                    );
                    proceed();
                });
            });

            $(".zModalContent .zForm").submit(function(e) {
                e.preventDefault();

                // create a new formdata
                var data = new FormData();
                data.set("file_name", $(this).find(".file_name").val());
                data.set("pathToHere", '<?php ob_start();
echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
$_prefixVariable6 = ob_get_clean();
echo ltrim(ltrim(ltrim($_smarty_tpl->tpl_vars['zContent']->value->current,"https://"),"http://"),$_prefixVariable6);?>
');
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/delete.php",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(data) {
                        window.location.assign("#");
                        pond.removeFile();
                        Toastify({
                            text: "<?php echo smarty_function_zThis(array('z'=>"File has been deleted."),$_smarty_tpl);?>
",
                            duration: 3000
                        }).showToast();
                        $(".favSettings").addClass("displayNone");
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

            // submit form functions
            $("#zPage-favicon-form").submit(function(e) {
                e.preventDefault();
                var form = $(this).clone();
                var pathToHere = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "pathToHere").val('<?php ob_start();
echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
$_prefixVariable7 = ob_get_clean();
echo ltrim(ltrim(ltrim($_smarty_tpl->tpl_vars['zContent']->value->current,"https://"),"http://"),$_prefixVariable7);?>
');
                var z = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "z").val('<?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
');
                form.append(pathToHere);
                form.append(z);
                var post_data = form.serialize();
                window.location.assign("#modalupload");
                $("body").css("overflow", "hidden");

                setTimeout(function (){
                    (function(next) {
                        renderEverything();
                    }(function() {
                        $.ajax({
                            url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/configure.php",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: post_data,
                            type: "GET",
                            success: function(data) {
                            }
                        });
                    }));

                    window.location.assign("#");
                    $("body").css("overflow", "auto");

                    Toastify({
                        text: "<?php echo smarty_function_zThis(array('z'=>"Change has been made."),$_smarty_tpl);?>
",
                        duration: 3000
                    }).showToast();
                }, 301);
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
