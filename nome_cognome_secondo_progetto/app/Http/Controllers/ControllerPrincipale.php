<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MailContatto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ControllerPrincipale extends Controller
{

    public static $servizi =[
        ['name' => 'Tipi di Frutta', 'uri' => 'TipiFrutta', 'TipoServizi'=>['servizio'=>'tutti i tipi di frutta']],
        ['name' => 'Spedizione', 'uri' => 'spedizione','costo'=> 100, 'TipoServizi'=>['servizio'=>'servizio spedizione']],
        ['name' => 'Storage', 'uri' => 'storage','costo'=> 50, 'TipoServizi'=>['servizio'=>'deposito merci']],
        ['name' => 'Affitto', 'uri' => 'affitto','costo'=> 3000,'TipoServizi'=>['servizio'=>'affita i tuoi terreni']],
    ];

   public function sezioni(){
    return view('servizi', ['services'=>self::$servizi] );
   }


   public function TuttiServizi($singolo){

    foreach (self::$servizi as $element) {
        if ( $singolo == $element['uri']) {
            return view('singolo', ['services' => $element]);
        }
    }

    abort(404);

}


    public function ShowMail(Request $request){
        
    $contact= $request->all();
    Mail::to('proprietario@gmail.com')->send(new MailContatto($contact)); 
     
    return redirect("mail"); 
    }

}


