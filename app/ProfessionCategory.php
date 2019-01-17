<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profession;

class ProfessionCategory extends Model
{
  public function getImage()
  {
    if($this->image == null)
    {
      return '/img/university-no-image.png';
    }

    return '/img/professions/' . $this->image;

  }
  public function professions()
  {
    return $this->hasMany(Profession::class, 'category_id');
  }

  public function language()
  {
      return $this->belongsTo(Language::class, 'lang_id');
  }
}
