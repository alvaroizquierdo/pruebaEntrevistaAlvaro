<?php
/**
 * Created by PhpStorm.
 * User: aizquierdo.diaz
 * Date: 19/02/2019
 * Time: 23:19
 */

class SmtpProvider implements MailerProvider
{

    public function send($email, $message)
    {
        if (!is_null($email) && !empty($email)){
            return true;
        } else {
            return false;
        }
    }
}