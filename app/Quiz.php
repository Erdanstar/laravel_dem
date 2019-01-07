<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Storage;
use App\Status;
use App\Orentation;
use App\QuizQuestion;
use App\QuizCorrectOption;
use Cviebrock\EloquentSluggable\Sluggable;

class Quiz extends Model
{
  use Sluggable;
  protected $fillable = ['title', 'image'];

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
  public function getQuestionLimit($quiz_id)
  {
    $quiz = Quiz::find($quiz_id);
    $question = QuizQuestion::where('quiz_id', '=', $quiz_id)->orderBy('id')->limit(1)->first();
    if(empty($question)){
      return '/quiz';
    } else {
      return 'quiz/'. $quiz->slug . '/' . $question->id . '';
    }
  }
  public function removeImage()
  {
      if($this->image != null)
      {
          Storage::delete('uploads/' . $this->image);
      }
  }

  public function uploadImage($image)
  {
    if($image == null) { return; }

    $this->removeImage();
    $filename = str_random(10) . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploads'), $filename);
    $this->image = $filename;
    $this->save();
  }

  public function getImage()
  {
    if($this->image == null)
    {
      return '/img/no-image.png';
    }

    return '/uploads/' . $this->image;

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
    $this->removeImage();
    $this->delete();
  }



}
