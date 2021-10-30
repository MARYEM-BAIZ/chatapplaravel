<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\User;
use App\Models\Typeuser;
use App\Models\Message;
use App\Models\Typemessage;
use App\Http\Controllers\Auth;

class FiliereController extends Controller
{
    public function register(Request $request){
        $n=$request->input('name');
        $e=$request->input('email');
        $p=$request->input('password');
        $cp=$request->input('password_confirmation');
        
          if (isset($request->photoduprofile)) {
             
             $original_name =  $request->photoduprofile->getClientOriginalName();
 
             $filename =  pathinfo($original_name,PATHINFO_FILENAME); 
         
             $extension =  $request->photoduprofile->getClientOriginalExtension(); 
         
             $filename_store = $filename.time().'.'.$extension;
         
             $request->photoduprofile->move('photos', $filename_store);
         
             $u= new User;
             $u->name=$n;
             $u->email=$e;
             $u->profile_photo_path='photos/'.$filename_store;
             $u->password=$p;
             $u->save();
 
          }
 
         else {
          $u1=new User;
          $u1->name=$n;
          $u1->email=$e;
          $u1->password=$p;
          $u1->save();
         }

        return view('login');

    }
}
