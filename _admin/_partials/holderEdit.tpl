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
            {foreach from=$holder->content key=key item=content}
                <div class="hiddenData displayNone">
                    {foreach from=$zTools->zToolsGetAllLangs(true) item=l}
                        {assign var=h value=$editPage[$l->id]->zPageGetHolder($l->id, $holder->id, $id_block, $holder->order)}
                        <textarea name="{if $holder->types[$key] == 'image' || $holder->types[$key] == 'images'}images{else}content{/if}[{$l->id}][]" data-type="{$holder->types[$key]}">
                            {$h->content[$key]}
                        </textarea>
                    {/foreach}
                </div>
                {if $holder->types[$key] == "no"}
                {elseif $holder->types[$key] == "input"}
                    <div class="top-20">
                        <input name="zContent[{$zUser->id_lang_closest}][]" type="text" class="back-white page-title padL-45" value="{$content|escape:"html"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                {elseif $holder->types[$key] == "image"}
                    <div class="top-20">
                        <input class="displayNone" value="{$content}">
                        <input type="file" class="filepond">
                    </div>
                {elseif $holder->types[$key] == "images"}
                    <div class="top-20">
                        <div class="zTog-imagesFor{$modalNumber} pad-10 rad-5 pointThis" style="background:#f0efee">
                            <div class="zShow-imagesFor{$modalNumber}">{zThis z="Click to upload your media."}</div>
                            <div class="zShow-imagesFor{$modalNumber} displayNone">{zThis z="Hide upload panel."}</div>
                        </div>
                        <div class="displayNone zShow-imagesFor{$modalNumber} _top--5">
                            <div class="floatingSpace widthAll height-10 boldMin-1 boldSoG2 boldNoL boldNoR boldNoB index-10" style="background:#f0efee"></div>
                            <input class="displayNone" value="{$content}" data-multi="true">
                            <input type="file" class="filepond">
                        </div>
                    </div>
                {elseif $holder->types[$key] == "categorylist"}
                    {assign var=allcats value=$zCategoryTools->zCategoryGetAll($zContent->language->id)}
                    <div class="top-20">
                        <select class="pad-10 top-0 bottom-0 zCategory" name="zContent[{$zUser->id_lang_closest}][]" style="background-color: white">
                            <option disabled>{zThis z="Choose..."}</option>
                            {foreach from=$allcats item=cat}
                                <option value="{$cat->id}" {if $content == $cat->id}selected{/if}>{$cat->name}</option>
                            {/foreach}
                        </select>
                    </div>
                {elseif $holder->types[$key] == "link"}
                    {assign var="contents" value=";"|explode:$content}
                    <div class="zGroup top-20">
                        <label class="back7 borderForm boldMin-1 boldNoR pad-16 text6">
                            {zThis z="Link"}
                        </label>
                        <input name="zContent[{$zUser->id_lang_closest}][]" type="text" class="zLink1 back-white top-0 bottom-0" placeholder="{zThis z="Link"}" value="{$contents[0]}">
                        <input type="text" class="zLink2 back-white top-0 bottom-0" placeholder="{zThis z="Button"}" value="{$contents[1]}">
                    </div>
                {else}
                    <div class="top-20">
                        <textarea class="summernote" name="zContent[{$zUser->id_lang_closest}][]">{$content}</textarea>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
    {assign var=modalNumber value=$modalNumber+1 scope="global"}
{/foreach}
