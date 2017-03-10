<div>
    <h3 align="center">
        <a target="_blank" href="http://www.armazon.com.ua/">Інтернет-магазин ARMAZON</a>
    </h3>

    <div>
        <h3 style="text-decoration: underline">
            <strong>Постачальник</strong>
        </h3>

        <p>
            ФОП Павлюк Василь В'ячиславович
        </p>

        <p>
            +38 067 450 80 80
        </p>
    </div>
    <hr>
    <h3>
        Замовлення № {$orderId}
        <br>
        від {$currentData} року
    </h3>

    <table border="1" style="width: 90%; border-collapse: collapse; font-size: 18px; padding: 3px; text-align: left;">
        <tr style=" height: 40px;">
            <th>№</th>
            <th>Повна назва товару</th>
            <th>Ціна за 1 шт.</th>
            <th>Кількість</th>
            <th>Сума</th>
        </tr>

        {assign var=i value=1}

        {foreach from=$profiles item=profile}
            {foreach from=$sizes item=size}
                {foreach from=$colors item=color}
                    {if {$cart[$profile['profile']][$size['size']][$color['color']]} > 0}
                        <tr>
                            <td>{$i++}</td>
                            <td>
                                Фоторамка {$profile['profile']|upper}
                                {if $size['size'] eq "21x30F"}
                                    21x30 (ніжка)
                                    {else}
                                    {$size['size']}
                                {/if}
                                колір "{$color['ukr_title']}"
                            </td>
                            <td>
                                {$size["{$profile['profile']}_prices"]}
                                грн.
                            </td>
                            <td>
                                {$cart[$profile['profile']][$size['size']][$color['color']]}
                                шт.
                            </td>
                            <td>
                                {$size["{$profile['profile']}_prices"] *
                                $cart[$profile['profile']][$size['size']][$color['color']]}
                                грн.
                            </td>
                        </tr>
                    {/if}
                {/foreach}
            {/foreach}
        {/foreach}
        <tr>
            <td style="text-align: center;" colspan="3"><span style="background-color: #e6e6e6">Разом без знижки</span></td>
            <td>{$count} шт.</td>
            <td>{$totalPriceWithoutDiscount} грн.</td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="3"><span style="background-color: #e6e6e6">Знижка</span></td>
            {if $secondDiscount == 1}
                <td>{$secondDiscountValue}%</td>
            {else}
                0 %
            {/if}
            <td>{$totalPriceWithoutDiscount - $price} грн.</td>
        </tr>
        <tr>
            <td style="text-align: center;" colspan="4"><span style="background-color: #e6e6e6">До оплати</span></td>
            <td>{$price} грн.</td>
        </tr>
    </table>
    <br>
    <div>

        <h3>
            {if $secondDiscount == 1}
                Сума замовлення:
                <span>{$price} гривень (15% знижка)</span>
            {else}
                Сума замовлення:
                <span>{$price} гривень</span>
            {/if}
        </h3>

        {if $firstDiscount == 1}
            <h3>
                + Безкоштовна доставка.
            </h3>
        {/if}

        <h3>Загальна кількість: {$count} штук</h3>
    </div>
    <hr>
    <div>
        <h3 style="text-decoration: underline">
            <strong>Замовник</strong>
        </h3>

        <p>
            Прізвище, ім'я, по батькові: {$name}
        </p>

        <p>
            Мобільний: {$mobile}
        </p>

        <p>
            Місто: {$town}
        </p>

        <p>
            Перевізник: {$transporter}
        </p>

        {if isset($email)}
            <p>
                E-mail: {$email}
            </p>
        {/if}
        {if isset($additional)}
            <p>
                Замовник дописав:
            </p>
            <p>
                {$additional}
            </p>
        {/if}
    </div>

</div>