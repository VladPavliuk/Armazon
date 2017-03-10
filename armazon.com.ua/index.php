<?php
/**
 * THIS SCRIPT START APPLICATION.
 */

/**
 * Running Session.
 *
 */
session_start();

/**
 * Include file with configuration.
 *
 */
require_once('../configs/config.php');

// Show error
if(DEVELOPER_MODE === true) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

/**
 * Include Router class.
 *
 */
require_once(ROUTER_PATH);

/**
 * Initialize product cart.
 *
 */
if(empty($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/**
 * Connecting to file which connect and start template engine.
 *
 */
require_once(SMARTY_RUN);

/**
 * Start finding controller and action.
 * Based on URI. And execute them.
 *
 */
(new Router());