{include file="partials/discountList.tpl"}
{include file="partials/totalInfo.tpl"}

<div class="row">
    <div id="profile-content" class="profile-content">

        <!-- {$profile|upper} TABLE -->
        <div class="row">
            <!-- Profile title -->
            <h3 class="profile-title">Фоторамки {$profile|upper}</h3>

            <!-- Profile description -->
            <div class="profile-description well clearfix">
                <img class="pull-left" src="{#imagesPath#}/{$profile}_shema.png" height="100" alt="">
                <div class="pull-left">
                    <small>
                        <b>Конструкція фоторамки:</b>
                        <ul>
                            <li>Дерев'яна рамка (покриття - два шари кольорового лаку)</li>
                            <li>Скло 2 мм., етикетка, задник з ДВП і ніжкою</li>
                            <li>Підвіска, упаковка з термозбіжної плівки</li>
                        </ul>
                    </small>
                </div>
            </div>
        </div>

        <!-- Single frame-->
        <div class="row">

            {* Sizes loop *}
            {foreach from=$sizes item=size}
                {* Create price value*}
                {assign var=profile_price value=$size["{$profile}_prices"]}
                {if $profile_price > 0}
                    {include file="partials/singleFrame.tpl"}
                {/if}
            {/foreach}

        </div>
    </div>
</div>