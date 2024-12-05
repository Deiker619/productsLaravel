<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

route::post('/pdf', function (Request $request){
    /*  $data = User::all(); */
     $datos = [
     'client' => $request->input('client'),
      'cart' =>$request->input('cart')
     ];
     $pdf = Pdf::loadView('pdf.invoice', $datos);
     $pdf->setPaper('letter', 'portrait'); 
     $pdf->setPaper([0, 0, 226, 841]); //Formato para factura
      return $pdf->stream('archivo.pdf', ["Attachment" => true]); 
      /* return response()->json(['message'=>'hola', 'datos' => $datos],200); */
  });