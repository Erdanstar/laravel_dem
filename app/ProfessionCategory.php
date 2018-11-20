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
      return '/img/no-image.png';
    }

    return '/img/professions/' . $this->image;

  }
  public function professions()
  {
    $this->hasMany(Profession::class);
  }
}
