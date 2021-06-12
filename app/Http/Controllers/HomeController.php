<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Content;

class HomeController extends Controller{

    public function home(){
        if(session('user_id')!==null){
        $user=User::where("id",session('user_id'))->first()->username;
        return view("home")->with("user",$user);
}
else return redirect("login");
}

public function contenutiHome(){
    $contenuti=DB::select("SELECT titolo,immagine,descrizione from contents");
    return $contenuti;
}

public function addFavorite($t){

    $id_titolo=Content::where('titolo',$t)->first()->id;
    $id_username=session('user_id');
    DB::insert("INSERT into content_user(user_id,content_id) values( ?, ? )", [$id_username , $id_titolo]);

}

public function removeFavorite($t){
    $id_titolo=Content::where('titolo',$t)->first()->id;
    $id_username=session('user_id');
    DB::delete("DELETE from content_user where user_id=? and content_id=?", [$id_username, $id_titolo]);
    
}

public function checkFavorite(){

$id_username=session('user_id');
$user=User::find($id_username);
return $user->favourites;

}

}

?>