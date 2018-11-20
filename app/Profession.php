<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orentation;
use App\ProfessionCategory;

class Profession extends Model
{
    public function category()
    {
      return $this->belongsTo(ProfessionCategory::class);
    }
    public function orentation()
    {
      return $this->belongsTo(Orentation::class);
    }
}
