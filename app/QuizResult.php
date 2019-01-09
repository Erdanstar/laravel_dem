<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Orentation;
use App\Quiz;

class QuizResult extends Model
{
    protected $fillable = [ 'user_id', 'orentation_id', 'profession_id' ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function orentation()
    {
      return $this->belongsTo(Profession::class);
    }

    public function quiz()
    {
      return $this->belongsTo(Quiz::class);
    }
}
