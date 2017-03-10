<?php

require_once(CONTROLLERS_PATH . 'CartInteract.php');

/**
 * Class CartController interacts with Shopping cart
 *
 */
class CartController
{
    use CartInteract;

    /**
     * Render shopping cart page.
     *
     */
    public function indexAction()
    {
        //> Smarty initialization.
        $smarty = SmartyRun::connect();
        //<

        // Get shopping cart.
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        //> Get data from models.
        $profiles = Main::getProfiles();
        $sizes = Main::getSizes();
        $colors = Main::getColors();
        //<

        //> Total Info and discounts
        $totalInfo = $this->getAllInfo();

        $count = $totalInfo["totalCount"];
        $price = $totalInfo["totalPrice"];
        $firstDiscount = $totalInfo["firstDiscount"];
        $secondDiscount = $totalInfo["secondDiscount"];

        $firstDiscountTitle = FIRST_DISCOUNT_START;
        $secondDiscountTitle = SECOND_DISCOUNT_START;
        //<

        //> Define template variable.
        $smarty->assign('cart', $cart);

        //> Discount variables
        $smarty->assign('firstDiscount', $firstDiscount);
        $smarty->assign('secondDiscount', $secondDiscount);
        //<

        //> Define other variables
        $smarty->assign('count', $count);
        $smarty->assign('price', $price);

        $smarty->assign('profiles', $profiles);
        $smarty->assign('sizes', $sizes);
        $smarty->assign('colors', $colors);
        //<

        //> Include style file
        $smarty->assign('styles', [
            'cartPage.css'
        ]);
        //<

        //> Include content template.
        $smarty->assign('templateFile', 'cartPage.tpl');
        //<

        //> Include JS file
        $smarty->assign('jsFile', 'cart.js');
        //<

        //> Display template
        $smarty->display('layouts/main.tpl');
        //<
    }

    /**
     * Render confirm cart page.
     *
     */
    public function confirmAction()
    {

        //> Smarty initialization.
        $smarty = SmartyRun::connect();
        //<

        //> Get data from models.
        $totalInfo = $this->getAllInfo();

        $price = $totalInfo["totalPrice"];
        //<

        //> Define template variable.
        $smarty->assign('price', $price);
        //<

        //> Define secure variable
        $_SESSION["sendValidate"] = true;
        //<

        //> Include content template.
        $smarty->assign('templateFile', 'confirmPage.tpl');
        //<

        //> Display template
        $smarty->display('layouts/main.tpl');
        //<

    }
}