<?php

namespace App\Http\Controllers;

use App\Providers\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Notifications\NotificationServiceProvider;

class NotificacionController extends Controller
{
    public function sendNotification(){ //Método
        NotificationService::notify("Alvaro Izquierdo", \SmtpProvider::class);
    }
}
