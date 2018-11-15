<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TestAnswer;

class TestAnswer extends Model
{
  protected $fillable = ['answer','answer_number', 'question_number'];
  public static function add($fields)
  {
    $answer = new static;
    $answer->fill($fields);
    $answer->save();

    return $answer;
  }

  public static function getFirstAnswer($question)
  {
  return  TestAnswer::where('question_number', '=', $question)->where('answer_number', '=', 1)->firstOrFail();
  }
  public static function getSecondAnswer($question)
  {
  return  TestAnswer::where('question_number', '=', $question)->where('answer_number', '=', 2)->firstOrFail();
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
