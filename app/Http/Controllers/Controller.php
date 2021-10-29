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


    public function template(){

        return view('template');

    }

    public function accueil(){

        return view('accueil');

    }

    public function profile(){

        return view('profile');

    }

    public function discussion(){

        return view('discussion');

    }

    public function register(){

        return view('register');

    }

    public function login(){

        return view('login');

    }

    public function invitation(){

        return view('invitation');

    }

    public function comment(){

        return view('comment');

    }

    public function publier(){

        return view('publier');

    }

    public function firstview(){

        return view('firstview');

    }
    

    

}
