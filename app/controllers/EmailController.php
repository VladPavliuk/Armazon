<?php

require_once(CONTROLLERS_PATH . 'CartInteract.php');

/**
 * Class EmailController send mail.
 *
 */
class EmailController
{
    use CartInteract;

    /**
     * Send mails
     *
     */
    public function indexAction()
    {
        if(isset($_SESSION["sendValidate"])) {
            $email = new Email();

            $email->name = $_POST['name'];
            $email->mobile = $_POST['mobile'];
            $email->town = $_POST['town'];
            $email->transporter = $_POST['transporter'];
            $email->email = $_POST['email'];
            $email->additional = $_POST['additional'];

            $email->totalInfo = $this->getAllInfo();

            $email->validEmailData();

            $email->userCheckIn();

            $smarty = $email->formEmailBody();


            $email->emailBody = $smarty->fetch('layouts/email.tpl');

            $email->sendMail(EMAIL_ADMIN);
            $email->sendMail("vasyl.pavlyuk@gmail.com ");
            $email->sendMail($email->email);

            // Delete all session variable
            session_unset();

            // All success.
            $smarty->display('layouts/success.tpl');
        } else {
            Router::showErrorPage("Ваша корзина порожня.");
        }
    }
}