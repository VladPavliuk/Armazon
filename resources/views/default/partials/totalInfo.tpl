{if $count > 0}
    {assign var=display value="block"}
{else}
    {assign var=display value="none"}
{/if}
<!-- INFO TABLE -->
<div class="row">
    <nav style="display: {$display}"
         class="total-info navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <ul class="nav navbar-nav">
                <li>
                    <a  type="button" href="/cart#shopping-cart" class="to-cart-button btn btn-success navbar-btn btn-lg" type="button">
                        <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
                        Перейти в кошик
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <p class="lead total-price navbar-text">
                    {if $secondDiscount == 1}
                        Ціна:
                        <b class="text-success">{$price} грн. (-15%)</b>
                    {else}
                        Ціна:
                        <b class="text-success">{$price} грн.</b>
                    {/if}
                </p>
                <p class="lead total-count navbar-text">
                    Кількість:
                    <b class="text-info">{$count} штук</b>
                </p>
            </ul>
        </div>
    </nav>
</div>