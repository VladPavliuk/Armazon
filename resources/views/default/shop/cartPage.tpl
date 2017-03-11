{if $count > 0}
    <div id="shopping-cart" class="shopping-cart">

        <div class="col-lg-7 col-lg-offset-2">
            <div class="row">
                <div class="page-header">
                    <h2>Ваш кошик</h2>
                </div>
                <table align="left" class="table table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Профіль</th>
                        <th>Розмір</th>
                        <th>Колір</th>
                        <th>Ціна за 1 шт.</th>
                        <th>Сума</th>
                        <th>Кількість</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    {foreach from=$profiles item=profile}
                        {foreach from=$sizes item=size}
                            {foreach from=$colors item=color}

                                {if {$cart[$profile['profile']][$size['size']][$color['color']]} > 0}
                                    <tr id="{$profile['profile']}_{$size['size']}_{$color['color']}">
                                        <td></td>
                                        <td>{$profile['upper_ukr_title']}</td>
                                        <td>
                                            {if $size['size'] eq "21x30F"}
                                                21x30 (ніжка)
                                            {else}
                                                {$size['size']}
                                            {/if}
                                        </td>
                                        <td>{$color['upper_ukr_title']}</td>
                                        <td>
                                            {$size["{$profile['profile']}_prices"]}
                                            грн.
                                        </td>
                                        <td class="single-frame-total-sum">
                                            {$size["{$profile['profile']}_prices"] *
                                            $cart[$profile['profile']][$size['size']][$color['color']]}
                                            грн.
                                        </td>
                                        <td>
                                            <input type="number"
                                                   value="{$cart[$profile['profile']][$size['size']][$color['color']]}"
                                                   id='{$profile["profile"]}-{$size["size"]}-{$color["color"]}'
                                                   oninput="inputCount('{$profile["profile"]}','{$size["size"]}','{$color["color"]}', $(this).val());"
                                                   class="count" size="3" maxlength="5"
                                                   placeholder="0 шт.">
                                        </td>
                                        <td class="remove"
                                            <button onclick="clearInput('{$profile["profile"]}','{$size["size"]}','{$color["color"]}', $(this));"
                                                    type="button"
                                                    class="close"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </td>
                                    </tr>
                                {/if}
                            {/foreach}
                        {/foreach}
                    {/foreach}
                    </tbody>
                </table>
            </div>

            <div class="row">
                <a href="/#profiles-list" class="btn btn-primary">Додати ще рамок!</a>
            </div>
            <br>

            <!-- Discount list -->
            {if $firstDiscount == 1}
                {assign var=firstDiscountActive value='block'}
            {else}
                {assign var=firstDiscountActive value='none'}
            {/if}
            {if $secondDiscount == 1}
                {assign var=secondDiscountActive value='block'}
            {else}
                {assign var=secondDiscountActive value='none'}
            {/if}

            <div class="row">
                <ul class="list-group">
                    <li style="display: {$firstDiscountActive}"
                        class="first-discount list-group-item list-group-item-success">
                        <p class="lead">
                            Безкоштовна доставка.
                        </p>
                    </li>

                    <li style="display: {$secondDiscountActive}"
                        class="second-discount list-group-item list-group-item-success">
                        <p class="lead">

                            Знижка 15%.
                        </p>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="total-info">
                    <h3>Загальна вартість: <span class="total-price">{$price}</span> гривень</h3>
                    <h3> Загальна кількість: <span class="total-count">{$count}</span> штук</h3>
                </div>
                <br>
                <a href="/confirm-order#send-form" class="btn btn-success btn-lg">Перейти до оформлення замовлення</a>
            </div>
        </div>

    </div>
{else}
    <div style="margin-bottom: 400px;">
        <div class="page-header">
            <h2>Ваш кошик порожній.</h2>
        </div>

        <p class="lead"><a href="/#profiles-list">Заповнити?</a></p>
    </div>
{/if}