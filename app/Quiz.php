<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Status;
use App\Orentation;
use App\QuizQuestion;
use App\QuizCorrectOption;
use Cviebrock\EloquentSluggable\Sluggable;

class Quiz extends Model
{
  use Sluggable;
  protected $fillable = ['title', 'status_id'];

  public function questions()
  {
    return $this->hasMany(QuizQuestion::class);
  }

  public function statuses()
  {
    return $this->hasMany(Status::class);
  }

  public function orentations()
  {
    return $this->hasMany(Orentation::class);
  }
  public function correct()
  {
    return $this->hasMany(QuizCorrectOption::class);
  }

  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'title'
          ]
      ];
  }



  public static function add($fields)
  {
    $quiz = new static;
    $quiz->fill($fields);
    $quiz->save();

    return $quiz;
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
