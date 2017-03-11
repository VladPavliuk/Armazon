<?php


/**
 * Class Cart.
 * This model catches all requests and handle them.
 *
 */
class Cart
{

    /**
     * Add count of frame based on info about profile, size, color.
     *
     * @param $profile
     * @param $size
     * @param $color
     * @param $count
     * @return bool
     */
    public static function addToCart($profile, $size, $color, $count)
    {
        if (!($profile && $size && $color)) {
            return false;
        }

        if ($count > 0 && is_numeric($count)) {
            $_SESSION['cart'][$profile][$size][$color] = intval($count);
            return true;
        } else {
            $_SESSION['cart'][$profile][$size][$color] = NULL;
            return false;
        }
    }

    /**
     * Return price of certain frame.
     *
     * @param $profile
     * @param $size
     * @return null
     */
    public static function getFramePrice($profile, $size)
    {
        $db = DataBase::connect();
        $framePrice = NULL;

        $priceResult = $db->query("SELECT `{$profile}_prices` FROM `size` WHERE `size`='{$size}' ");

        while ($row = $priceResult->fetch()) {
            $framePrice = $row[$profile . "_prices"];
        }
        return $framePrice;
    }

    /**
     * Count and return count of all frames in shopping-cart.
     *
     * @return int
     */
    public function getTotalNumber()
    {
        $cart = $_SESSION['cart'];
        $totalCount = 0;

        foreach ($cart as $ProfileKey => $ProfileVal) {
            foreach ($ProfileVal as $SizeKey => $SizeVal) {
                foreach ($SizeVal as $ColorKey => $ColorVal) {
                    $sizeCount = $cart[$ProfileKey][$SizeKey][$ColorKey];
                    $totalCount += $sizeCount;
                }
            }
        }
        return $totalCount;
    }

    /**
     * Count and return price of all frames in shopping-cart.
     *
     * @return int
     */
    public function getTotalPrice()
    {
        $totalPrice = $this->countTotalPrice();

        if($this->checkSecondDiscount()) {
            $totalPrice = $totalPrice * (100 - SECOND_DISCOUNT_VALUE) / 100;
        }

        $totalPrice = round($totalPrice);

        return $totalPrice;
    }

    /**
     * Count and return price without discounts of all frames in shopping-cart.
     *
     * @return int
     */
    public function getTotalPriceWithoutDiscounts()
    {
        $totalPriceWithOutDiscount = $this->countTotalPrice();

        return $totalPriceWithOutDiscount;
    }

    /**
     * Count total price from Data Base values.
     *
     * @return int
     */
    private function countTotalPrice()
    {
        $cart = $_SESSION['cart'];

        $totalPrice = 0;

        foreach ($cart as $ProfileKey => $ProfileVal) {
            foreach ($ProfileVal as $SizeKey => $SizeVal) {
                foreach ($SizeVal as $ColorKey => $count) {
                    if (is_numeric($count) && $count > 0) {

                        $framePrice = static::getFramePrice($ProfileKey, $SizeKey);
                        $sizeCount = $cart[$ProfileKey][$SizeKey][$ColorKey];

                        $totalPrice += $sizeCount * $framePrice;
                    }
                }
            }
        }

        $totalPrice = round($totalPrice);

        return $totalPrice;
    }

    /**
     *  Checking first discount available
     *
     * @return bool
     */
    public function checkFirstDiscount()
    {
        $totalPrice = $this->countTotalPrice();

        if ($totalPrice >= FIRST_DISCOUNT_START) {
            return true;
        }

        return false;
    }

    /**
     *  Checking second discount available
     *
     * @return bool
     */
    public function checkSecondDiscount()
    {
        $totalPrice = $this->countTotalPrice();

        if ($totalPrice >= SECOND_DISCOUNT_START) {
            return true;
        }

        return false;
    }
}