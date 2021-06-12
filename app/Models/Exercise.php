<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model{

protected $primaryKey="nome";
protected $autoIncrement=false;
protected $keyType="string";
public $timestamps=false;

public function training_cards(){
    return $this->belongsToMany("App\Models\User");
    }

}




?>