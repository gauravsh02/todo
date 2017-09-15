<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model 
{
    public function getTitleAttribute($value){  //accessor - for changing data comming from dtabase to view
    	return ucfirst($value);	
    }

    // public function setBodyAttribute($value){  //mutator - for chnging data going from view to database
    // 	return $this->attribute['body'] = ucfirst($value);
    // }
}
