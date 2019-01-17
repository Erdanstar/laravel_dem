<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\University;

class Country extends Model
{
    public function universities()
    {
        return $this->hasMany(University::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }
}
