<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;
use App\Orentation;
use App\QuizQuestion;

class QuizCorrectOption extends Model
{
    protected $fillable = ['correct', 'quiz_id', 'question_id', 'orentation_id'];

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
      return $this->belongsTo(Quiz::class);
    }
    public function question()
    {
      return $this->belongsTo(QuizQuestion::class);
    }
    public function orentation()
    {
      return $this->belongsTo(Orentation::class);
    }

    public function getOption($id)
    {
      $option = QuizQuestionOption::where("id",$id)->pluck("option_text");

      return $option;
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

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }
}
