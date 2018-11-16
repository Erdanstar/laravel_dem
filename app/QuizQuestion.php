<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;
use App\QuizQuestionOption;

class QuizQuestion extends Model
{
    protected $fillable = ['question_text', 'quiz_id'];

    public function quiz()
    {
      return $this->belongsTo(Quiz::class);
    }

    public function setQuizID($id)
    {
      $this->attributes['quiz_id'] = $id ? $id : null;
    }

    public function options()
    {
      $options = $this->hasMany(QuizQuestionOption::class);
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
