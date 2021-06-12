<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Exercise;

class SchedaController extends Controller{

    public function scheda(){
        if(session('user_id')!==null){
        $user=User::where("id",session('user_id'))->first()->username;
        return view("scheda")->with("user",$user);
}
else return redirect("login");
}

public function contenutiScheda(){
    $contenuti=DB::select("SELECT nome,descrizione from exercises");
    return $contenuti;
}

public function addScheda($e){

    $id_username=session('user_id');
    DB::insert("INSERT into exercise_user(user_id,exercise_nome) values( ?, ? )", [$id_username , $e]);
    
}

public function removeScheda($e){
    $id_username=session('user_id');
    DB::delete("DELETE from exercise_user where user_id=? and exercise_nome=?", [$id_username, $e]);
}

public function checkScheda(){

    $id_username=session('user_id');
    $user=User::find($id_username);
    return $user->training_cards;
    
    }

}

?>