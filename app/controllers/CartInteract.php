<?php

require_once(MODELS_PATH .'Cart.php');

/**
 * Trait CartInteract handle all interact with Shopping cart
 *
 */
trait CartInteract
{
    /**
     *  Checking first discount available
     *
     * @return bool
     */
    public function checkFirstDiscount()
    {
        $cartModel = new Cart();
        $firstDiscountAvailable = $cartModel->checkFirstDiscount();

        return $firstDiscountAvailable;
    }

    /**
     *  Checking second discount available
     *
     * @return bool
     */
    public function checkSecondDiscount()
    {
        $cartModel = new Cart();
        $secondDiscountValid = $cartModel->checkSecondDiscount();

        return $secondDiscountValid;
    }

    /**
     * Add do cart count of choose frame
     *
     * @param $profile
     * @param $size
     * @param $color
     * @param $count
     */
    public function setCartAction($profile, $size, $color, $count)
    {
        Cart::addToCart($profile, $size, $color, $count);

        $requestArray = $this->getAllInfo();

        echo json_encode($requestArray);
    }

    /**
     * Get array of:
     * 1. Total number
     * 2. Total price
     * 3. Total price without discounts
     * 4. (bool) Discounts value
     *
     * @return array
     */
    public function getAllInfo()
    {
        $cartModel = new Cart();

        $totalPrice = $cartModel->getTotalPrice();
        $totalNumber = $cartModel->getTotalNumber();

        $totalPriceWithoutDiscount = $cartModel->getTotalPriceWithoutDiscounts();

        $firstDiscount = $cartModel->checkFirstDiscount();
        $secondDiscount = $cartModel->checkSecondDiscount();

        $requestArray = array(
            "totalCount" => $totalNumber,
            "totalPrice" => $totalPrice,
            "totalPriceWithoutDiscount" => $totalPriceWithoutDiscount,
            "firstDiscount" => $firstDiscount,
            "secondDiscount" => $secondDiscount,
        );

        return $requestArray;
    }

    /**
     * Client response function.
     * Print Total price of all frames in shopping cart.
     *
     * @return int
     */
    public function getTotalPriceAction()
    {
        $cartModel = new Cart();

        $totalPrice = $cartModel->getTotalPrice();

        //echo json_encode($totalPrice);
        return $totalPrice;
    }

    /**
     * Client response function.
     * Print JSON array witch contains shopping cart.
     *
     */
    public function getCartAction()
    {
        echo json_encode($_SESSION['cart']);
    }

    /**
     * Client response function.
     * Print count of frames in shopping cart.
     *
     * @return int
     */
    public function getTotalNumberAction()
    {
        $cartModel = new Cart();

        $cartModel = $cartModel->getTotalNumber();

        //echo json_encode($cartModel);
        return $cartModel;
    }

    /**
     * Client response function.
     * Print price of one frames in shopping cart.
     *
     * @param $profile
     * @param $size
     *
     * @return int
     */
    public function getFramePriceAction($profile, $size)
    {
        $framePrice = Cart::getFramePrice($profile, $size);

        echo json_encode($framePrice);
        //return $framePrice;
    }
}