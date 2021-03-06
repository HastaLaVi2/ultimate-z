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

{foreach from=$holders item=holder}
    <div class="zDestroy-holder{$modalNumber} grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="{$modalNumber}">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            {$holder->name}
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal{$modalNumber}" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal{$modalNumber}">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                {zThis z="Delete Holder"}
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            {zThis z="Are you sure you want to delete this holder?"}
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                {zThis z="Close"}
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder{$modalNumber}" href="#">
                                <span>{zThis z="Accept"}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="{$holder->id}" class="displayNone">
            <input name="id_page_holder[]" type="text" value="{$holder->id_page_holder}" class="displayNone">
            {foreach from=$holder->partials key=id item=partial}
                {if $partial['name']}<h5 class="bottom--15 gray2">{$partial['name']}</h5>{/if}
                <div class="hiddenData displayNone">
                    {foreach from=$zTools->zToolsGetAllLangs(true) item=l}
                        {assign var=h value=$editPage[$l->id]->zPageGetHolder($l->id, $holder->id, $id_block, $holder->order)}
                        <textarea name="{if $partial['type'] == 'image' || $partial['type'] == 'images'}images{else}content{/if}[{$l->id}][]" data-type="{$partial['type']}">
                            {$h->partials[$id]['content']}
                        </textarea>
                    {/foreach}
                </div>
                <div class="top-20{if $partial['type'] == 'link' || $partial['type'] == 'option' || (($partial['type'] == 'option' || $partial['type'] == 'input') && isset($partial['multiple']))} zGroup{/if}">
                    {if $partial['type'] == "no"}
                    {elseif $partial['type'] == "input"}
                        <input name="zContent[{$zUser->id_lang_closest}][]" type="text" class="top-0 index-1 bottom-0 back-white page-title padL-45" value="{$partial['content']|escape:"html"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2 index-1">
                            <i class="far fa-square"></i>
                        </div>
                    {elseif $partial['type'] == "image"}
                        <input class="displayNone" value="{$partial['content']}">
                        <input type="file" class="filepond">
                    {elseif $partial['type'] == "images"}
                        <div class="zTog-imagesFor{$modalNumber} pad-10 rad-5 pointThis" style="background:#f0efee">
                            <div class="zShow-imagesFor{$modalNumber}">{zThis z="Click to upload your media."}</div>
                            <div class="zShow-imagesFor{$modalNumber} displayNone">{zThis z="Hide upload panel."}</div>
                        </div>
                        <div class="displayNone zShow-imagesFor{$modalNumber} _top--5">
                            <div class="floatingSpace widthAll height-10 boldMin-1 boldSoG2 boldNoL boldNoR boldNoB index-10" style="background:#f0efee"></div>
                            <input class="displayNone" value="{$partial['content']}" data-multi="true">
                            <input type="file" class="filepond">
                        </div>
                    {elseif $partial['type'] == "categorylist"}
                        {assign var=allcats value=$zCategoryTools->zCategoryGetAll($zContent->language->id)}
                        <select class="pad-10 top-0 bottom-0 zCategory" name="zContent[{$zUser->id_lang_closest}][]" style="background-color: white">
                            <option disabled>{zThis z="Choose..."}</option>
                            {foreach from=$allcats item=cat}
                                <option value="{$cat->id}" {if $partial['content'] == $cat->id}selected{/if}>{$cat->name}</option>
                            {/foreach}
                        </select>
                    {elseif $partial['type'] == "link"}
                        {assign var="contents" value=";"|explode:$partial['content']}
                        <label class="back7 borderForm boldMin-1 boldNoR pad-16 text6">
                            {zThis z="Link"}
                        </label>
                        <input name="zContent[{$zUser->id_lang_closest}][]" type="text" class="zLink1 back-white top-0 bottom-0" placeholder="{zThis z="Link"}" value="{$contents[0]}">
                        <input type="text" class="zLink2 back-white top-0 bottom-0" placeholder="{zThis z="Button"}" value="{$contents[1]}">
                    {elseif $partial['type'] == "option"}
                        <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                            {zThis z="Choose..."}
                        </label>
                        <select class="zSelect index-1 pad-10 top-0 bottom-0" style="background-color:white" name="zContent[{$zUser->id_lang_closest}][]">
                            {foreach from=$partial["options"] key=key item=option}
                                <option value="{$key+1}" {if ($key+1) == $partial['content']}selected{/if}>{$option}</option>
                            {/foreach}
                        </select>
                    {else}
                        <textarea class="summernote" name="zContent[{$zUser->id_lang_closest}][]">{$partial['content']}</textarea>
                    {/if}
                    {if ($partial['type'] == 'option' || $partial['type'] == 'input') && isset($partial['multiple'])}
                    <div class="multiple back7 borderForm boldMin-1 padTB-10 padLR-20 text6 pointThis index-0">
                        <div class="hollyMid"><i class="fas fa-plus"></i></div>
                    </div>
                    {/if}
                </div>
                {if isset($partial['multiple'])}
                <div class="multipleDive"></div>
                {/if}
            {/foreach}
        </div>
    </div>
    {assign var=modalNumber value=$modalNumber+1 scope="global"}
{/foreach}
