<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orentation extends Model
{
  protected $fillable = ['title', 'quiz_id'];

  public function quiz()
  {
    return $this->belongsTo(Quiz::class);
  }

  public function correct()
  {
    $options = $this->hasMany(QuizCorrectOption::class);
  }

  public function setQuizID($id)
  {
    $this->attributes['quiz_id'] = $id ? $id : null;
  }


  public static function add($fields)
  {
    $status = new static;
    $status->fill($fields);
    $status->save();

    return $status;
  }

  public function edit($fields)
  {
    $this->fill($fields);
    $this->save();
  }

  public function remove()
  {
    $this->delete();
  }
}
