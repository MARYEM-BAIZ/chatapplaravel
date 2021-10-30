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
use Illuminate\Support\Facades\Auth;

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

    // public function register(Request $request){
    //     $n=$request->input('name');
    //     $e=$request->input('email');
    //     $p=$request->input('password');
    //     $cp=$request->input('password_confirmation');
        
    //       if (isset($request->photoduprofile)) {
             
    //          $original_name =  $request->photoduprofile->getClientOriginalName();
 
    //          $filename =  pathinfo($original_name,PATHINFO_FILENAME); 
         
    //          $extension =  $request->photoduprofile->getClientOriginalExtension(); 
         
    //          $filename_store = $filename.time().'.'.$extension;
         
    //          $request->photoduprofile->move('photos', $filename_store);
         
    //          $u= new User;
    //          $u->name=$n;
    //          $u->email=$e;
    //          $u->profile_photo_path='photos/'.$filename_store;
    //          $u->password=$p;
    //          $u->save();
 
    //       }
 
    //      else {
    //       $u1=new User;
    //       $u1->name=$n;
    //       $u1->email=$e;
    //       $u->password=$p;
    //       $u1->save();
    //      }

    //     return view('login');

    // }

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
    
    public function pagelogout(){

        Auth::logout();
        return redirect('/login');
    }
    

}
