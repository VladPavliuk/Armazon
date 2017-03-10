<?php


/**
 * Class Email.
 * This model handle email.
 *
 */
class Email
{
    public $name = "Name";
    public $mobile = "Number";
    public $town = "town";
    public $transporter = "Самовивіз";
    public $email = null;
    public $additional = null;
    public $totalInfo = null;

    public $headers = "";
    public $subject = "Замовлення фоторамок Armazon";
    public $emailBody = "";

    public $orderId = null;

    public function userCheckIn()
    {
        $db = DataBase::connect();

        $name = $this->name;
        $email = $this->email;
        $phone = $this->mobile;
        $town = $this->town;
        $user_added = $this->additional;
        $order_worth = $this->totalInfo["totalPrice"];

        $result = "INSERT INTO user (name, email, phone, town, user_write, orders_worth)
        values('{$name}', '{$email}', '{$phone}', '{$town}', '{$user_added}', '{$order_worth} гривень.')";

        $db->query($result);

        $query = "SELECT `id` FROM `user` ORDER BY id DESC LIMIT 1";
        $result = $db->query($query);

        $result = $result->fetch();
        $this->orderId = $result['id'];
    }

    public function sendMail($mailTo)
    {
        $this->headers = "MIME-Version: 1.0" . "\r\n";
        $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $this->headers .= "From: Armazon <sale@armazon.com>" . "\r\n";

        mail($mailTo, $this->subject, $this->emailBody, $this->headers);
    }

    /**
     * Validation email data
     *
     */
    public function validEmailData()
    {
        $this->name = trim($this->name);
        $this->name = ucfirst(trim($this->name));
        $this->name = substr($this->name, 0, 50);

        $this->mobile = trim($this->mobile);
        $this->mobile = substr($this->mobile, 0, 20);

        $this->town = trim($this->town);
        $this->town = ucfirst($this->town);
        $this->town = substr($this->town, 0, 30);

        $this->email = trim($this->email);
        $this->email = substr($this->email, 0, 30);

        $this->additional = trim($this->additional);
        $this->additional = substr($this->additional, 0, 1000);

        if(strlen($this->email) === 0) {
            $this->email = null;
        }

        if(strlen($this->additional) === 0) {
            $this->additional = null;
        }
    }

    public function formEmailBody()
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

        $totalInfo = $this->totalInfo;

        $count = $totalInfo["totalCount"];
        $price = $totalInfo["totalPrice"];
        $totalPriceWithoutDiscount = $totalInfo['totalPriceWithoutDiscount'];

        $firstDiscount = $totalInfo["firstDiscount"];
        $secondDiscount = $totalInfo["secondDiscount"];

        $orderId = rand(1,9) * 1000 + $this->orderId;
        $currentData = self::getUkrData();
        //<

        if($count <= 0) {
            die("Ваша корзина порожня");
        }

        //> Define template variable.
        $smarty->assign('cart', $cart);

        $smarty->assign('count', $count);
        $smarty->assign('price', $price);
        $smarty->assign('totalPriceWithoutDiscount', $totalPriceWithoutDiscount);

        $smarty->assign('firstDiscount', $firstDiscount);
        $smarty->assign('secondDiscount', $secondDiscount);
        $smarty->assign('secondDiscountValue', SECOND_DISCOUNT_VALUE);

        $smarty->assign('orderId', $orderId);
        $smarty->assign('currentData', $currentData);

        $smarty->assign('profiles', $profiles);
        $smarty->assign('sizes', $sizes);
        $smarty->assign('colors', $colors);

        $smarty->assign('name', $this->name);
        $smarty->assign('mobile', $this->mobile);
        $smarty->assign('town', $this->town);
        $smarty->assign('transporter', $this->transporter);
        $smarty->assign('email', $this->email);
        $smarty->assign('additional', $this->additional);
        //<

        //> Include content template.
        $smarty->assign('templateFile', 'email.tpl');
        //<

        //> Display template
        return $smarty;
        //<
    }

    public static function getUkrData() {
        $mounth = [
            'січня',
            'лютого',
            'березня',
            'квітня',
            'травня',
            'червня',
            'липня',
            'серпня',
            'вересня',
            'жовтня',
            'листопада',
            'грудня',
        ];

        return date('d') . " " . $mounth[date('m') - 1] . " " . date('Y');
    }

}