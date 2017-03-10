<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:47
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/discountList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b53632771_63127525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63cb196d9d1e9db33bf731295f5c6227dbf58328' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/discountList.tpl',
      1 => 1489174472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c30b53632771_63127525 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['firstDiscount']->value == 1) {?>
    <?php $_smarty_tpl->_assignInScope('firstDiscountActive', 'list-group-item-success');
} else { ?>
    <?php $_smarty_tpl->_assignInScope('firstDiscountActive', ' ');
}
if ($_smarty_tpl->tpl_vars['secondDiscount']->value == 1) {?>
    <?php $_smarty_tpl->_assignInScope('secondDiscountActive', 'list-group-item-success');
} else { ?>
    <?php $_smarty_tpl->_assignInScope('secondDiscountActive', ' ');
}?>

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
                    <li class="first-discount list-group-item <?php echo $_smarty_tpl->tpl_vars['firstDiscountActive']->value;?>
">
                        <small>
                            При замовленні від
                        </small>
                        <span class="text-success">
                            <?php echo $_smarty_tpl->tpl_vars['firstDiscountTitle']->value;?>
 грн.
                        </span>
                        <ul>
                            <li>
                                <b>Безкоштовна доставка</b>
                            </li>
                        </ul>
                    </li>
                    <li class="second-discount list-group-item <?php echo $_smarty_tpl->tpl_vars['secondDiscountActive']->value;?>
">
                        <small>
                            При замовленні від
                        </small>
                        <span class="text-success">
                            <?php echo $_smarty_tpl->tpl_vars['secondDiscountTitle']->value;?>
 грн.
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
</div><?php }
}
