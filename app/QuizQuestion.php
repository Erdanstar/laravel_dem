<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;
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



    public static function getByTopicAndQuestionNumber($slug, $questionNumber, $lang_id)
    {
			$quiz = Quiz::where('slug', '=', $slug)->where('lang_id', $lang_id)->first();
      return QuizQuestion::where('quiz_id', $quiz->id)->where('id', $questionNumber)->where('lang_id', $lang_id)->first();
    }

		public static function nextQuestionLink($slug, $questionNumber, $local, $lang_id) {
			$quiz = Quiz::where('slug', $slug)->where('lang_id', $lang_id)->first();
			$nextquestion = QuizQuestion::orderBy('id')->where('id', '>', $questionNumber)->where('lang_id', $lang_id)->first();
			$allQuestions = QuizQuestion::all()->where('quiz_id', $quiz->id)->where('lang_id', $lang_id);
			$nextQuestionLink = [];
			if ($nextquestion != null) {
					$nextQuestionLink['url']   = '/'. $local .'/quiz/' . $quiz->slug . '/' . $nextquestion->id;
					$nextQuestionLink['text']  = 'Следующий вопрос';
					$nextQuestionLink['class'] = 'btn-primary';
			} else {
					$nextQuestionLink['url']   = '/'.$local.'/quiz/result';
					$nextQuestionLink['text']  = 'Следущий вопрос';
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

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function remove()
    {
      $this->delete();
    }
}
