<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class RegisterController extends Controller{

public function create(){
    $request=request();
    $hashpw=hash('sha256', $request->password);
    $crypted_pw=base64_encode($hashpw);
    User::create([
        'username'=> $request->username,
        'password'=> $crypted_pw
    ]);
    return view('register')->with("reg","Registrazione completata.");

}

public function checkUsername($query){
    $exist= User::where('username',$query)->exists();
    return ['presente' => $exist];
}

public function register(){
    return view('register');
}

}
?>