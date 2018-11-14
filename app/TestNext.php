<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orentation;

class TestNext extends Model
{
  protected $fillable = ['orentation_id',
                         'first',
                         'second',
                         'third',
                         'four',
                         'five',
                         'six',
                         'seven',
                         'eight',
                         'nine',
                         'ten',
                         'eleven',
                         'twelve',
                         'thirteen',
                         'fourteen',
                         'fifteen',
                         'sixteen',
                         'seventeen',
                         'eighteen',
                         'nineteen',
                         'twenty',
                       ];

  public function orentation()
  {
    return $this->belongsTo(Orentation::class);
  }



  public static function add($fields)
  {
    $next = new static;
    $next->fill($fields);
    $next->save();

    return $next;
  }

  public function setOrentation($id)
  {
    if($id == null) {return;}
    $this->orentation_id = $id;
    $this->save();
  }

  public function getOrentationTitle()
  {
      return ($this->orentation != null)
              ?   $this->orentation->title
              :   'Нет категории';
  }

}
