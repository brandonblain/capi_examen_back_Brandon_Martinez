<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\user_domicilio;
use DateTime;

class UserController extends Controller
{

    public function index(){
        $get_Users = User::all();
        $get_DomicilioUsers = user_domicilio::all();
        $calcEdad = [];
        foreach ($get_Users as $usuarios)
        {
            $dateActual = new DateTime();
            $dateNacimiento = date("Y-m-d",strtotime($usuarios->fecha_nacimiento));
            $dateNac = new DateTime($dateNacimiento);
            $dateNac=$dateActual->diff($dateNac);
            array_push($calcEdad,$dateNac->y);
        }

        if ($get_Users!=null) {
               return response()->json(['Users' => $get_Users,'Domicilio'=>$get_DomicilioUsers, 'edad' => $calcEdad],200);
            }else{
                return json_encode(['message'=>'Error en la consulta, vuelva a intentarlo.'],400);
            }

    }
}
