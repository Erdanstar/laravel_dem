<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profession;
use App\QuizResult;
use App\QuizCorrectOption;
use App\ResultProfession;

class Orentation extends Model
{
  protected $fillable = ['title', 'quiz_id'];

  public function quiz()
  {
    return $this->belongsTo(Quiz::class);
  }

  public function professions()
  {
    return $this->hasMany(Profession::class);
  }
  public function quizResults()
  {
    return $this->hasMany(QuizResult::class);
  }

  public function correct()
  {
    return $this->hasMany(QuizCorrectOption::class);
  }

  public function resultProfessions()
  {
    return $this->hasMany(ResultProfession::class);
  }

  public function setQuizID($id)
  {
    return $this->attributes['quiz_id'] = $id ? $id : null;
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

  public function language()
  {
      return $this->belongsTo(Language::class, 'lang_id');
  }
}
