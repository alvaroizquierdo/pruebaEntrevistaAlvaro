<?php
/**
 * Created by PhpStorm.
 * User: aizquierdo.diaz
 * Date: 19/02/2019
 * Time: 23:27
 */

class SesProvider implements MailerProvider
{

    public function send($email, $message)
    {
        if (!is_null($message) && !empty($message)){
            return true;
        } else {
            return false;
        }
    }
}