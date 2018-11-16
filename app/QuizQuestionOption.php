<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class QuizQuestionOption extends Model
{
    protected $fillable = ['option_text', 'question_id'];

    public function setQuestionID($id)
    {
      $this->attributes['question_id'] = $id ? $id : null;
    }

    public function question()
    {
      return $this->belongsTo(QuizQuestion::class);
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
