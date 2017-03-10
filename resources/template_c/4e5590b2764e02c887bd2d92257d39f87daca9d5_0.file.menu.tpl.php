<?php
/* Smarty version 3.1.31, created on 2017-03-10 21:23:44
  from "/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c30b50667274_16196708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e5590b2764e02c887bd2d92257d39f87daca9d5' => 
    array (
      0 => '/home/vlad/Desktop/projects/new-armazon/armazon.com.ua/../resources/views/default/partials/menu.tpl',
      1 => 1489175655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c30b50667274_16196708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="main-menu navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/#profiles-list">Головна</a></li>
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Фоторамки
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/leonardo#profile-content">Серія LEONARDO</a></li>
                            <li><a href="/frodo#profile-content">Серія FRODO</a></li>
                        </ul>
                    </li>
                    <li><a href="/about#about-page">Про нас</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <p class="navbar-text">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <small>(067)-450-80-80</small>
                    </p>

                    <p class="navbar-text">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <small>sale@armazon.com.ua</small>
                    </p>
                    <li>
                        <a href="https://www.facebook.com/armazonframes/" target="_blank">
                            <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav><?php }
}
