<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TestNext;

class Orentation extends Model
{
  protected $fillable = ['orentation'];

  public static function add($fields)
  {
    $orentation = new static;
    $orentation->fill($fields);
    $orentation->save();

    return $orentation;
  }

  public function nexts()
  {
    return $this->hasMany(TestNext::class);
  }

}
