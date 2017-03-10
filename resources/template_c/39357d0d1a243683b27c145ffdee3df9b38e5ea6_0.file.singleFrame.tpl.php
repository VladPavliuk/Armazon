<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:47
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/singleFrame.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b537509b6_41476896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39357d0d1a243683b27c145ffdee3df9b38e5ea6' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/singleFrame.tpl',
      1 => 1489172208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c30b537509b6_41476896 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
    <div class="frame-unit panel panel-default">
        <div class="panel-body">

            
            
            <?php if (isset($_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['profile']->value][$_smarty_tpl->tpl_vars['size']->value['size']][$_smarty_tpl->tpl_vars['color']->value['color']])) {?>
                <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['profile']->value][$_smarty_tpl->tpl_vars['size']->value['size']][$_smarty_tpl->tpl_vars['color']->value['color']]);
?>
                <?php $_smarty_tpl->_assignInScope('buttonVisible', '');
?>

            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('count', '');
?>
                <?php $_smarty_tpl->_assignInScope('buttonVisible', "hide");
?>
            <?php }?>

            <div class="pull-left">
                <img
                        class="single-frame-image"
                        onclick='uploadFramePhoto("<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
","<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
")'
                        src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/frames_mini_photos/<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
/<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
_<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
.jpg"
                        alt="Фоторамка"
                        title="Фоторамка"
                        data-toggle="modal"
                        data-target="#more-photos-modal-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
">
                <br>
                <div>
                    <h5>
                        <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == "21x30F") {?>
                            21x30ніжка
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>

                        <?php }?>
                        см. "<?php echo $_smarty_tpl->tpl_vars['color']->value['ukr_title'];?>
"
                    </h5>
                    <h5>
                        <span class="text-success">
                            <?php echo $_smarty_tpl->tpl_vars['profile_price']->value;?>
 грн.
                        </span>
                    </h5>
                    <hr>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"
                           id='<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value["size"];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value["color"];?>
'
                           oninput="inputCount('<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['size']->value["size"];?>
','<?php echo $_smarty_tpl->tpl_vars['color']->value["color"];?>
', $(this).val());"
                           class="count pull-left" maxlength="4" size="4" max="1000" type="number"
                           placeholder="0 шт.">

                    <button class="remove <?php echo $_smarty_tpl->tpl_vars['buttonVisible']->value;?>
 close pull-left" type="button" aria-label="Close"
                            onclick="clearInput('<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['size']->value["size"];?>
','<?php echo $_smarty_tpl->tpl_vars['color']->value["color"];?>
', $(this));">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="more-photos-modal-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                 tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                Фото <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['profile']->value, 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
 "<?php echo $_smarty_tpl->tpl_vars['color']->value['ukr_title'];?>
"</h4>
                        </div>
                        <div class="modal-body">
                            <div id="carousel-example-generic-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                                 class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                                        data-slide-to="0" class="active"></li>
                                    <?php if (file_exists(((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath'))."/frames/".((string)$_smarty_tpl->tpl_vars['profile']->value)."/".((string)$_smarty_tpl->tpl_vars['size']->value['size'])."/".((string)$_smarty_tpl->tpl_vars['color']->value['color'])."/".((string)$_smarty_tpl->tpl_vars['profile']->value)."_".((string)$_smarty_tpl->tpl_vars['size']->value['size'])."_".((string)$_smarty_tpl->tpl_vars['color']->value['color'])."_front.jpg")) {?>
                                        <li data-target="#carousel-example-generic-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                                            data-slide-to="1"></li>
                                    <?php }?>
                                    <li data-target="#carousel-example-generic-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                                        data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/loading.jpg"
                                             alt="Головне фото">
                                    </div>
                                    <?php if (file_exists(((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath'))."/frames/".((string)$_smarty_tpl->tpl_vars['profile']->value)."/".((string)$_smarty_tpl->tpl_vars['size']->value['size'])."/".((string)$_smarty_tpl->tpl_vars['color']->value['color'])."/".((string)$_smarty_tpl->tpl_vars['profile']->value)."_".((string)$_smarty_tpl->tpl_vars['size']->value['size'])."_".((string)$_smarty_tpl->tpl_vars['color']->value['color'])."_front.jpg")) {?>
                                        <div class="item">
                                            <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/loading.jpg"
                                                 alt="Переднє фото">
                                        </div>
                                    <?php }?>
                                    <div class="item">
                                        <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/loading.jpg"
                                             alt="Заднє фото">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control"
                                   href="#carousel-example-generic-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                                   role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Попереднє</span>
                                </a>
                                <a class="right carousel-control"
                                   href="#carousel-example-generic-<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['size']->value['size'];?>
-<?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
"
                                   role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Наступне</span>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Закрити</button>
                        </div>
                    </div>
                </div>
            </div>  <!-- End Modal -->

        </div>

    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
