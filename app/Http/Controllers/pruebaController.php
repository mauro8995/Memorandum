<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    //calculo el Indice de Masa Corporal
    public function calculoIMC(){
        $peso = 70;
        $altura = 90;
        $IMC = $peso/pow($altura,2);
        $IMC = round($IMC, 2);
        if($IMC <= 18.5){
            return "Infrapeso";
        }
        elseif($IMC <= 20){
            return "Normal";
        }
        elseif($IMC <= 20){
            return "Sobrepeso";
        }
        else{
            return "Obeso";
        }
    }

    // suma de los dígitos de todos los números de 1 a N
    public function sumaDigitos(){
        $numero =12;
        $respuesta = 0;
        for ($i=1; $i <=  $numero; $i++) {
            if($i<=9){
                $respuesta += $i;
            }
        }
        if( strlen($numero)>=2){
            $u = $numero % 10;
            for ($i=0; $i <= $u; $i++) {
                $respuesta += (1+$i);
            }
        }
        return $respuesta;
    }

    //mover los 0 al final
    public function moveZeros(){
        $a =  [false,12,0,0,5,5,9];
        $contador = 0;
        $new_array = [];
        foreach ($a as $key => $value) {
            if($value ===0){
                unset($a[$key]);
                $contador++;
            }
        }
        for ($i=0; $i <  $contador ; $i++) {
            array_push($a,0);
        }
        foreach ($a as $key => $value) {
            array_push($new_array,$value);
        }
        return response()->json($new_array);
    }
}
