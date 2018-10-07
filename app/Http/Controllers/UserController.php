<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class UserController extends Controller
{
	//Controleur de FLEREAU Jonathan
    public function message(){
		$titre = 'Page FLEREAU Jonathan pour le poste de Développeur Web';
		return view('RouteFlereau',['titre' => $titre]);
	}
}
