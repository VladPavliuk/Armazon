<?php

require_once(MODELS_PATH . 'Main.php');
require_once(CONTROLLERS_PATH . 'CartInteract.php');

/**
 * Class MainController
 * This controller makes main page and main action with shopping cart.
 *
 */
class MainController
{
    use CartInteract;

    /**
     * Render the main page of the app.
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

        $smarty->assign('count', $count);
        $smarty->assign('price', $price);

        //>Discount variables
        $smarty->assign('firstDiscount', $firstDiscount);
        $smarty->assign('secondDiscount', $secondDiscount);
        $smarty->assign('firstDiscountTitle', $firstDiscountTitle);
        $smarty->assign('secondDiscountTitle', $secondDiscountTitle);
        //<

        $smarty->assign('profiles', $profiles);
        $smarty->assign('sizes', $sizes);
        $smarty->assign('colors', $colors);
        //<

        //> Define style files
        $smarty->assign('styles', [
            'mainPage.css',
            'totalInfo.css',
            'discountList.css',
        ]);
        //<

        //> Define content template.
        $smarty->assign('templateFile', 'mainPage.tpl');
        //<

        //> Define JS files
        $smarty->assign('jsFile', 'app.js');
        //<

        //> Display templates
        $smarty->display('layouts/main.tpl');
        //<
    }

    /**
     * Render the profile page
     *
     */
    public function profilePageAction($profileFrame)
    {
        $smarty = SmartyRun::connect();

        // Get shopping cart.
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        //> Get data from models.
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

        $smarty->assign('count', $count);
        $smarty->assign('price', $price);

        //> Discount variables
        $smarty->assign('firstDiscount', $firstDiscount);
        $smarty->assign('secondDiscount', $secondDiscount);
        $smarty->assign('firstDiscountTitle', $firstDiscountTitle);
        $smarty->assign('secondDiscountTitle', $secondDiscountTitle);
        //<

        $smarty->assign('profile', $profileFrame);
        $smarty->assign('sizes', $sizes);
        $smarty->assign('colors', $colors);
        //<

        //> Define style files
        $smarty->assign('styles', [
            'profilePage.css',
            'totalInfo.css',
            'discountList.css',
            'singleFrame.css',
        ]);
        //<

        //> Define content template.
        $smarty->assign('templateFile', 'profilePage.tpl');
        //<

        //> Define JS files
        $smarty->assign('jsFile', 'app.js');

        //> Display templates
        $smarty->display('layouts/main.tpl');
        //<
    }

    /**
     * Render the about page of the app.
     *
     */
    public function aboutAction()
    {
        //> Smarty initialization
        $smarty = SmartyRun::connect();
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

        $smarty->assign('count', $count);
        $smarty->assign('price', $price);

        //> Discount variables
        $smarty->assign('firstDiscount', $firstDiscount);
        $smarty->assign('secondDiscount', $secondDiscount);
        $smarty->assign('firstDiscountTitle', $firstDiscountTitle);
        $smarty->assign('secondDiscountTitle', $secondDiscountTitle);
        //<

        //> Include style files
        $smarty->assign('styles', [
            'aboutPage.css',
            'totalInfo.css',
            'discountList.css',
        ]);
        //<

        //> Include content template
        $smarty->assign('templateFile', 'aboutPage.tpl');
        //<

        //> Display template
        $smarty->display('layouts/main.tpl');
        //<
    }
}