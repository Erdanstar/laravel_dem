<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestAnswer extends Model
{
  protected $fillable = ['answer','answer_number'];
  public static function add($fields)
  {
    $post = new static;
    $post->fill($fields);
    $post->save();

    return $post;
  }
}
