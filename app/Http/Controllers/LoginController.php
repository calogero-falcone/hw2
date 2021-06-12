<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class LoginController extends Controller{

public function login(){
    if(session('user_id')!==null){
        return redirect('home');
    }
    else {
        return view('login');
    }
}

public function checkLogin(){
    $password=request('password');
    $hashpw=hash('sha256', $password);
    $crypted_pw=base64_encode($hashpw);
     $user = User::where('username', request('username'))->where('password',$crypted_pw)->first();
     if(isset($user)){
         Session::put("user_id",$user->id);
         return redirect('home');
     }
     else {
        return view("login")->with("errore","Credenziali non valide.");
     }
}

public function logout(){
    Session::flush();
    return redirect('login');
}



}

?>