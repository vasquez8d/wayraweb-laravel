<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send_mail(Request $request){

      $nombre = $request->input('name');
      $correo = $request->input('email');
      $mensaje = $request->input('message');
      $data = ['name' => $nombre,
               'email' => $correo,
               'mensaje' => $mensaje];

      Mail::send(['text' => 'mailwayra'], ["data1"=>$data], function($message)
      {
        $message->to('vasquez8d@gmail.com','Josue Posadas')->subject('Nuevo mensaje para WayraControl');
        $message->from('wayracontrol.web@gmail.com','WayraControl Mail Service');
      });
      echo 'Correo electrónico enviado';
    }

    public function html_email(){
      $data=['name' => 'Alex'];
      Mail::send(['text' => 'mail'],$data, function($message)
      {
        $message->to('vasquez8d@gmail.com','Alex Vasquez')->subject('texto HMTL');
        $message->from('wayracontrol.web@gmail.com','WayraControl');
      });
      echo 'Correo HTML electrónico enviado';
    }
}
