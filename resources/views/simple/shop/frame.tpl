<h1>Кількість: <span class="total-count">{$count}</span> штук.</h1>
<h1>Ціна: <span class="total-price">{$price}</span> грн.</h1>

{* Pforiles loop *}
{foreach from=$profiles item=profile}
<!-- {$profile['profile']|upper} TABLE -->
    <h1 align="center">{$profile['profile']}</h1>

    {* Colors button loop *}
    {foreach from=$colors item=color}
        <h2><button onclick="changeColor('{$profile['profile']}', '{$color['color']}')">{$color['upper_ukr_title']}</button></h2>
    {/foreach}

    {* Colors loop *}
    {foreach from=$colors item=color}
        <div class="{$profile['profile']}-{$color['color']}-table" style=" {if $color['default'] == NULL}display: none; {else} display: block{/if}">

        {* Sizes loop *}
        {foreach from=$sizes item=size}
            {* Create price value*}
            {assign var=profile_price value=$size["{$profile['profile']}_prices"]}

            {* Checking count exists *}
            {* Define enabled of remove button *}
            {if isset($cart[$profile['profile']][$size['size']][$color['color']])}
                {assign var=count value=$cart[$profile['profile']][$size['size']][$color['color']]}
                {assign var=buttonVisible value="1"}

            {else}
                {assign var=count value=""}
                {assign var=buttonVisible value="0"}
            {/if}

            <div style="width: 120px; display: inline-block">
                {$size['size']} - {$profile_price} грн.<br>
                <input value="{$count}"
                       id='{$profile["profile"]}-{$size["size"]}-{$color["color"]}'
                       oninput="inputCount('{$profile["profile"]}','{$size["size"]}','{$color["color"]}', $(this).val());"
                       class="count" style="width: 60px;" size="4" maxlength="5" type="number"
                       placeholder="0 шт.">
                <br>

                {$color['color']}
                <br>
                <button class="remove" style="opacity: {$buttonVisible};"
                        onclick="clearInput('{$profile["profile"]}','{$size["size"]}','{$color["color"]}', $(this));">X</button>
            </div>

        {/foreach}

        </div>
    {/foreach}

{/foreach}