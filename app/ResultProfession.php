<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultProfession extends Model
{
    public function orentation()
    {
        return $this->belongsTo(Orentation::class, 'orentation_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function getImage()
    {
        if ($this->image == null) {
            return '/img/no-image.png';
        }

        return '/uploads/resultprofessions/' . $this->image;

    }
}
