{if $firstDiscount == 1}
    {assign var=firstDiscountActive value='list-group-item-success'}
{else}
    {assign var=firstDiscountActive value=' '}
{/if}
{if $secondDiscount == 1}
    {assign var=secondDiscountActive value='list-group-item-success'}
{else}
    {assign var=secondDiscountActive value=' '}
{/if}

<div class="row">
    <div class="container-fluid">
        <div class="discount-list">
            <button class="btn btn-danger btn-lg"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseDiscountList"
                    aria-expanded="false"
                    aria-controls="collapseDiscountList">
                Поточні знижки
            </button>

            <div class="collapse" id="collapseDiscountList">
                <ul class="list-group clearfix">
                    <li class="first-discount list-group-item {$firstDiscountActive}">
                        <span>
                            При замовленні від
                        </span>
                        <span class="text-success">
                            {$firstDiscountTitle} грн.
                        </span>
                        <ul>
                            <li>
                                <b>Безкоштовна доставка</b>
                            </li>
                        </ul>
                    </li>
                    <li class="second-discount list-group-item {$secondDiscountActive}">
                        <span>
                            При замовленні від
                        </span>
                        <span class="text-success">
                            {$secondDiscountTitle} грн.
                        </span>
                        <ul>
                            <li>
                                <b>
                                    Знижка 15%
                                </b>
                            </li>
                            <li>
                                <b>
                                    Безкоштовна доставка
                                </b>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>