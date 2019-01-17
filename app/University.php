<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class University extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getLogo()
    {
    	if($this->logo == null)
    	{
    		return '/img/university-no-image.png';
    	}

    	return '/uploads/universities/' . $this->logo;

    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }
}
