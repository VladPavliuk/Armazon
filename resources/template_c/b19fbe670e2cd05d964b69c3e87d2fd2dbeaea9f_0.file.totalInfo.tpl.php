<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:44
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/totalInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b506a5c11_47325657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b19fbe670e2cd05d964b69c3e87d2fd2dbeaea9f' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/totalInfo.tpl',
      1 => 1489174754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c30b506a5c11_47325657 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
    <?php $_smarty_tpl->_assignInScope('display', "block");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('display', "none");
}?>
<!-- INFO TABLE -->
<div class="row">
    <nav style="display: <?php echo $_smarty_tpl->tpl_vars['display']->value;?>
"
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
                    <?php if ($_smarty_tpl->tpl_vars['secondDiscount']->value == 1) {?>
                        Ціна:
                        <b class="text-success"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 грн. (-15%)</b>
                    <?php } else { ?>
                        Ціна:
                        <b class="text-success"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 грн.</b>
                    <?php }?>
                </p>
                <p class="lead total-count navbar-text">
                    Кількість:
                    <b class="text-info"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 штук</b>
                </p>
            </ul>
        </div>
    </nav>
</div><?php }
}
