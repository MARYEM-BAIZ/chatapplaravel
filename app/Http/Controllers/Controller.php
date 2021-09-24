<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Groupe;
use App\Models\User;
use App\Models\Typeuser;
use App\Models\Message;
use App\Models\Typemessage;
use App\Models\Filiere;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function accueil(){

        return view('template');

    }

}
