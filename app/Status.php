<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;

class Status extends Model
{
    protected $fillable = ['title', 'description', 'quiz_id'];

    public function quiz()
    {
      return $this->belongsTo(Quiz::class);
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
