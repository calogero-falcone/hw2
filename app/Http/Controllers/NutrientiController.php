<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class NutrientiController extends Controller{

    public function nutrienti(){
        if(session('user_id')!==null){
        $user=User::where("id",session('user_id'))->first()->username;
        return view("nutrienti")->with("user",$user);
}
else return redirect("login");
}

public function searchFoodData($query){
    $json=Http::get('https://api.nal.usda.gov/fdc/v1/foods/search',[
        'api_key'=> env("FOODDATA_APIKEY"),
        'query'=>$query,
        "sortBy"=>"fdcId",
        "pageSize"=>20
]);

if($json->failed()) abort(500);

return $json;

}

}

?>