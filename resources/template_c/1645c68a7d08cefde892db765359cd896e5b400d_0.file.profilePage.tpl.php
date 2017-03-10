<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:47
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/shop/profilePage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b535f8ad0_67963299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1645c68a7d08cefde892db765359cd896e5b400d' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/shop/profilePage.tpl',
      1 => 1488717360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/discountList.tpl' => 1,
    'file:partials/totalInfo.tpl' => 1,
    'file:partials/singleFrame.tpl' => 1,
  ),
),false)) {
function content_58c30b535f8ad0_67963299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:partials/discountList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:partials/totalInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div id="profile-content" class="profile-content">

        <!-- <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['profile']->value, 'UTF-8');?>
 TABLE -->
        <div class="row">
            <!-- Profile title -->
            <h3 class="profile-title">Фоторамки <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['profile']->value, 'UTF-8');?>
</h3>

            <!-- Profile description -->
            <div class="profile-description well clearfix">
                <img class="pull-left" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
_shema.png" height="100" alt="">
                <div class="pull-left">
                    <small>
                        <b>Конструкція фоторамки:</b>
                        <ul>
                            <li>Дерев'яна рамка (покриття - два шари кольорового лаку)</li>
                            <li>Скло 2 мм., етикетка, задник з ДВП і ніжкою</li>
                            <li>Підвіска, упаковка з термозбіжної плівки</li>
                        </ul>
                    </small>
                </div>
            </div>
        </div>

        <!-- Single frame-->
        <div class="row">

            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                
                <?php $_smarty_tpl->_assignInScope('profile_price', $_smarty_tpl->tpl_vars['size']->value[((string)$_smarty_tpl->tpl_vars['profile']->value)."_prices"]);
?>
                <?php if ($_smarty_tpl->tpl_vars['profile_price']->value > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:partials/singleFrame.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        </div>
    </div>
</div><?php }
}
