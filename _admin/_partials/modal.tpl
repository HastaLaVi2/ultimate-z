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

{if $_mButton}
<a href="#modal{$_mLabel}" class="zButton zHov-zShadow5 primary sweet font-16">{$_mButton}</a>
{/if}

<div class="zModal" id="modal{$_mLabel}">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
            {if $_mForm}
            <form {if $_mFormId}id="{$_mFormId}"{/if} class="zForm" method="POST" role="form" action="{$_mForm}">
            {/if}
                <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        {$_mTitle}
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone">{$_mHidden}</div>
                    {$_mContent}
                </div>
                <div class="rightText">
                    {if !$_noClose}
                    <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        {$zThis["Close"]}
                    </a>
                    {/if}
                    {if $_mForm}
                    <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>{if $_mSubmit}{$_mSubmit}{else}{$zThis["Accept"]}{/if}</span>
                    </button>
                    {/if}
                </div>
            {if $_mForm}
            </form>
            {/if}
        </div>
    </div>
</div>
