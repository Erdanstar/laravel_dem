<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;
use App\Orentation;
use App\QuizQuestion;

class QuizCorrectOption extends Model
{
    protected $fillable = ['correct', 'quiz_id', 'option_id', 'orentation_id'];

    public function setQuizID($id)
    {
      $this->attributes['quiz_id'] = $id ? $id : null;
    }

    public function setOptionID($id)
    {
      $this->attributes['option_id'] = $id ? $id : null;
    }

    public function setOrentationID($id)
    {
      $this->attributes['orentation_id'] = $id ? $id : null;
    }

    public function quiz()
    {
      return $this->hasOne(Quiz::class);
    }
    public function question()
    {
      return $this->hasOne(QuizQuestion::class);
    }
    public function orentation()
    {
      return $this->hasOne(Orentation::class);
    }

    public static function add($fields)
    {
      $correct = new static;
      $correct->fill($fields);
      $correct->save();

      return $correct;
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
