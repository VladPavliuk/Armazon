{if $count > 0}

    <div class="cart-table">
        <div>
            <h2>Замовник:</h2>
            <h3>Прізвище, ім'я, по батькові: {$name}</h3>
            <h3>Мобільний: {$mobile}</h3>
            <h3>Місто: {$town}</h3>

            {if isset($email)}
                <h3>E-mail: {$email}</h3>
                <br>
            {/if}
            {if isset($additional)}
                <h3> Ви дописали:</h3>
                <h3>{$additional}</h3>
            {/if}
        </div>

        <div class="total-info">
            <h2>Загальна сума: <span class="total-count">{$count}</span></h2>
            <h2>Загальна ціна: <span class="total-price">{$price}</span></h2>
        </div>

        <h1>{$name}, ваше замовлення</h1>

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
                            <td>{$cart[$profile['profile']][$size['size']][$color['color']]}</td>
                        </tr>
                        {/if}
                    {/foreach}
                {/foreach}
            {/foreach}
        </table>

    </div>

{else}
    <h2>Cart is empty</h2>
{/if}