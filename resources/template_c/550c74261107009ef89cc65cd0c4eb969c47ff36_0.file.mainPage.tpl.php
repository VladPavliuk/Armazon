<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:44
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/shop/mainPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b50680c95_29847751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '550c74261107009ef89cc65cd0c4eb969c47ff36' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/shop/mainPage.tpl',
      1 => 1489172258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/totalInfo.tpl' => 1,
  ),
),false)) {
function content_58c30b50680c95_29847751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:partials/totalInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-sx-10">
        <p>В наявності є наступні серії фоторамок:</p>
    </div>
</div>

<div class="row">
    
    <div id="profiles-list" class="list-group">
        <div class="col-lg-10 col-md-10 col-sm-10 col-sx-10">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
?>

                <!-- <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['profile']->value['profile'], 'UTF-8');?>
 -->
                <a href="/<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile'];?>
#profile-content">
                    <div class="clearfix list-group-item">
                        <div class="pull-left">
                            <img class="profile-page-image"
                                 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/frames_mini_photos/<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile'];?>
/15x21/dark/<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile'];?>
_15x21_dark_front.jpg"
                                 alt="Фотографія профілю"
                                 title="Фотографія профілю">
                        </div>

                        <div class="pull-left">
                            <h4>Фоторамки серії <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['profile']->value['profile'], 'UTF-8');?>
</h4>

                            <button class="btn btn-primary">
                                <span>Перейти до серії</span>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
</div>

<!--

<div class="row">
    <span data-container="body" data-toggle="popover" data-placement="right"
          data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          style="user-select: none;">
        <abbr title="attribute">Яка різниця між серіями?</abbr >
    </span>
</div>

--><?php }
}
