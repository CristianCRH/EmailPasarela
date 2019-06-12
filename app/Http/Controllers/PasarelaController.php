<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasarelaController extends Controller
{
   public function pasarela()
   {
        return view('pasarela.index');
   }
   public function envio(){

        // echo "Hola".$_GET['precio'];
    //      require "request/library/Requests.php";
    //   Requests::register_autoloader();
    //      require "culqui/lib/culqi.php";

    //      $SECRET_KEY="sk_test_0ptLnPAbqpDaS8cB";

    //      $culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
    //      $culqi->Charges->create(
    //          array(
    //             "amount" => 1000,
    //             "capture" => true,
    //             "currency_code" => "PEN",
    //             "description" => "Venta de prueba",
    //             "email" => "huaynaay@culqi.com",
    //             "installments" => 0,
    //             "source_id" =>$_GET['token']
    //          )
    //      );
         echo "dd";
   }
}
