<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:44
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b506b1ea3_59893513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90be9c48bfb4fa6f9431b628101de2e2b7974cb5' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/footer.tpl',
      1 => 1486469614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c30b506b1ea3_59893513 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/vlad/Desktop/projects/new-armazon/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<div class="footer">
    <div class="container-fluid">
        <div class="clearfix container">
            <div class="pull-left">
                <p>
                    <b>Адреса:</b><br>
                    Фірма ARMAZON<br>
                    78600, Івано-Франківська обл.<br>
                    м. Косів, вул. Франка, 2<br>
                    <br>
                    Всі права захищені <?php echo smarty_modifier_date_format(time(),"%Y");?>
 &copy;<br>
                </p>
            </div>
            <div class="pull-right">
                <p>
                    <b>Контактні дані:</b><br>
                    Павлюк Василь В'ячиславович<br>
                    <b>vasyl.pavlyuk@gmail.com </b><br>
                    <br>
                    Мобільний телефон:<br>
                   <b>067-450-80-80</b><br>
                </p>

            </div>
        </div>
    </div>
</div>
<?php }
}
