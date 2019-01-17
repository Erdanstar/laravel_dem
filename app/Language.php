<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResultProfession;

class Language extends Model
{
    public function resultProfessions(){
			return $this->hasMany(ResultProfession::class);
		}
}
