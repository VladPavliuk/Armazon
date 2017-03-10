<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:54
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/shop/cartPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b5abc42e8_88912029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e7bc895192b38b487adaefd2fc0c8798e8c70a' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/shop/cartPage.tpl',
      1 => 1489175216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c30b5abc42e8_88912029 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
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

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>

                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['profile']->value['profile']][$_smarty_tpl->tpl_vars['size']->value['size']][$_smarty_tpl->tpl_vars['color']->value['color']];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 > 0) {?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['upper_ukr_title'];?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == "21x30F") {?>
                                                21x30 (ніжка)
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>

                                            <?php }?>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['color']->value['upper_ukr_title'];?>
</td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['size']->value[((string)$_smarty_tpl->tpl_vars['profile']->value['profile'])."_prices"];?>

                                            грн.
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['size']->value[((string)$_smarty_tpl->tpl_vars['profile']->value['profile'])."_prices"]*$_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['profile']->value['profile']][$_smarty_tpl->tpl_vars['size']->value['size']][$_smarty_tpl->tpl_vars['color']->value['color']];?>

                                            грн.
                                        </td>
                                        <td>
                                            <input type="number"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['profile']->value['profile']][$_smarty_tpl->tpl_vars['size']->value['size']][$_smarty_tpl->tpl_vars['color']->value['color']];?>
"
                                                   id='<?php echo $_smarty_tpl->tpl_vars['profile']->value["profile"];?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value["size"];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value["color"];?>
'
                                                   oninput="inputCount('<?php echo $_smarty_tpl->tpl_vars['profile']->value["profile"];?>
','<?php echo $_smarty_tpl->tpl_vars['size']->value["size"];?>
','<?php echo $_smarty_tpl->tpl_vars['color']->value["color"];?>
', $(this).val());"
                                                   class="count" size="3" maxlength="5"
                                                   placeholder="0 шт.">
                                        </td>
                                        <td class="remove"
                                            <button onclick="clearInput('<?php echo $_smarty_tpl->tpl_vars['profile']->value["profile"];?>
','<?php echo $_smarty_tpl->tpl_vars['size']->value["size"];?>
','<?php echo $_smarty_tpl->tpl_vars['color']->value["color"];?>
', $(this));"
                                                    type="button"
                                                    class="close"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>

            <div class="row">
                <a href="/#profiles-list" class="btn btn-primary">Додати ще рамок!</a>
            </div>
            <br>

            <!-- Discount list -->
            <?php if ($_smarty_tpl->tpl_vars['firstDiscount']->value == 1) {?>
                <?php $_smarty_tpl->_assignInScope('firstDiscountActive', 'block');
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('firstDiscountActive', 'none');
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['secondDiscount']->value == 1) {?>
                <?php $_smarty_tpl->_assignInScope('secondDiscountActive', 'block');
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('secondDiscountActive', 'none');
?>
            <?php }?>

            <div class="row">
                <ul class="list-group">
                    <li style="display: <?php echo $_smarty_tpl->tpl_vars['firstDiscountActive']->value;?>
"
                        class="first-discount list-group-item list-group-item-success">
                        Безкоштовна доставка.
                    </li>

                    <li style="display: <?php echo $_smarty_tpl->tpl_vars['secondDiscountActive']->value;?>
"
                        class="second-discount list-group-item list-group-item-success">
                        Знижка 15%.
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="total-info">
                    <h3>Загальна вартість: <span class="total-price"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</span> гривень</h3>
                    <h3> Загальна кількість: <span class="total-count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span> штук</h3>
                </div>
                <br>
                <a href="/confirm-order#send-form" class="btn btn-success btn-lg">Перейти до оформлення замовлення</a>
            </div>
        </div>

    </div>
<?php } else { ?>
    <div style="margin-bottom: 400px;">
        <div class="page-header">
            <h2>Ваш кошик порожній.</h2>
        </div>

        <p class="lead"><a href="/#profiles-list">Заповнити?</a></p>
    </div>
<?php }
}
}
