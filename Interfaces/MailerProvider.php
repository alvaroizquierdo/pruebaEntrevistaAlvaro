<?php
/**
 * Created by PhpStorm.
 * User: aizquierdo.diaz
 * Date: 19/02/2019
 * Time: 23:12
 */

interface MailerProvider
{
    public function send($email, $message);

}