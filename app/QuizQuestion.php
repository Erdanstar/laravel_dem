<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;
use App\QuizQuestion;
use App\QuizCorrectOption;
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



    public static function getByTopicAndQuestionNumber($slug, $questionNumber)
    {
      $quiz = Quiz::where('slug', '=', $slug)->first();
      return QuizQuestion::where('quiz_id', '=', $quiz->id)->where('id', '=', $questionNumber)->first();
    }
    public static function nextQuestionLink($slug, $questionNumber) {
      $quiz = Quiz::where('slug', '=', $slug)->first();
      $nextquestion = QuizQuestion::orderBy('id')->where('id', '>', $questionNumber)->first();
        $nextQuestionLink = [];
        if ($quiz->questions->count() != $questionNumber) {
            $nextQuestionLink['url']   = '/quiz/' . $quiz->slug . '/' . $nextquestion->id;
            $nextQuestionLink['text']  = 'Следующий вопрос';
            $nextQuestionLink['class'] = 'btn-default';
        } else {
            $nextQuestionLink['url']   = '/quiz/result';
            $nextQuestionLink['text']  = 'Завершить';
            $nextQuestionLink['class'] = 'btn-primary';
        }
        return $nextQuestionLink;
    }

    public function options()
    {
      return $this->hasMany(QuizQuestionOption::class);
    }

    public function correct()
    {
      return $this->hasMany(QuizCorrectOption::class);
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
