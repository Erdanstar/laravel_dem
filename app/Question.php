<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    public function author()
    {
      return $this->belongsTo(User::class);
    }
}
