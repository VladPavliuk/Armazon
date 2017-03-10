{if $count > 0}

    <div class="cart-table">

        <h1>CART</h1>

        <table border="1">
            <tr>
                <th>Профіль</th>
                <th>Розмір</th>
                <th>Колір</th>
                <th>Кількість</th>
            </tr>

            {foreach from=$profiles item=profile}
                {foreach from=$sizes item=size}
                    {foreach from=$colors item=color}

                        {if {$cart[$profile['profile']][$size['size']][$color['color']]} > 0}
                        <tr>
                            <td>{$profile['upper_ukr_title']}</td>
                            <td>{$size['size']}</td>
                            <td>{$color['upper_ukr_title']}</td>
                            <td>
                                <input type="number"
                                       value="{$cart[$profile['profile']][$size['size']][$color['color']]}"
                                       id='{$profile["profile"]}-{$size["size"]}-{$color["color"]}'
                                       oninput="inputCount('{$profile["profile"]}','{$size["size"]}','{$color["color"]}', $(this).val());"
                                       class="count" style="width: 60px;" size="5" maxlength="5"
                                       placeholder="0 шт.">
                            </td>
                            <td><button class="remove" style="opacity: {$buttonVisible};"
                                        onclick="clearInput('{$profile["profile"]}','{$size["size"]}','{$color["color"]}', $(this));">
                                    X</button>
                            </td>
                        </tr>
                        {/if}
                    {/foreach}
                {/foreach}
            {/foreach}
        </table>

        <div class="total-info">
            <h2>Загальна сума: <span class="total-count">{$count}</span></h2>
            <h2>Загальна ціна: <span class="total-price">{$price}</span></h2>
        </div>

        <div class="send-form">
            <form action="/send" method="post">

                <label for="name">Прізвище, ім'я, по батькові</label><br>
                <input name="name" type="text" maxlength="50" required>
                <br>
                <br>
                <br>
                <label for="mobile">Мобільний, для зворотнього зв'язку</label><br>
                <input name="mobile" type="tel" maxlength="20" required>
                <br>
                <label for="town">Місто, для відправки замовлення</label><br>
                <input name="town" type="text" maxlength="30" required>
                <br>
                <br>
                <input type="submit" value="Зробити замовлення">
                <br>
                <br>
                <label for="email">Ваш E-mail (не обов'язково)</label><br>
                <input name="email" type="email" maxlength="30">
                <br>
                <label for="additional">Додаткова інформація (не обов'язково)</label><br>
                <textarea maxlength="100" name="additional" rows="4"></textarea>
                <br>
                <br>
            </form>
        </div>

    </div>

{else}
    <h2>Cart is empty</h2>
{/if}