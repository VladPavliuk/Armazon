<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:44
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/layouts/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b506306a0_30079871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7345071f861cdc3ea20371b2c09d0f4a3d2ef89b' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/layouts/main.tpl',
      1 => 1489174873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/header.tpl' => 1,
    'file:../partials/menu.tpl' => 1,
    'file:../partials/footer.tpl' => 1,
  ),
),false)) {
function content_58c30b506306a0_30079871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "smarty_main.conf", null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="Вас вітає фірма АРМАЗОН - український виробник дерев'яних фоторамок. На нашому сайті Ви можете купити рамки наступних розмірів: 10х15, 13х18, 15х21, 18х24, 21х30, 25х38, 30х40.">
    <meta name="keywords"
          content="фоторамки, рамки, продаж, фоторамок, фоторамки, фоторамочки, дерев'яні, woodframe, wood, frame">

    <meta name="author" content="Vlad">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'imagesPath');?>
/favicon.jpg" type="image/png">

    <title>Фоторамки Armazon</title>

    <!-- CDN styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">


    <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'stylesPath');?>
header.css">
    <?php if (isset($_smarty_tpl->tpl_vars['styles']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'style');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'stylesPath');
echo $_smarty_tpl->tpl_vars['style']->value;?>
">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php }?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'stylesPath');?>
footer.css">
</head>
<body>

<!-- HEADER -->
<?php $_smarty_tpl->_subTemplateRender("file:../partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- MENU -->
<?php $_smarty_tpl->_subTemplateRender("file:../partials/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- MAIN CONTENT-->
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("../shop/".((string)$_smarty_tpl->tpl_vars['templateFile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>

<!-- FOOTER -->
<?php $_smarty_tpl->_subTemplateRender("file:../partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- CDN scripts -->
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<!-- App Scripts -->
<?php if (isset($_smarty_tpl->tpl_vars['jsFile']->value)) {?>
    <?php echo '<script'; ?>
 src="src/scripts/<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>
</body>
</html><?php }
}
