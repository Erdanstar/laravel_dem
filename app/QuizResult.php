<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Orentation;

class QuizResult extends Model
{
    protected $fillable = [ 'user_id', 'orentation_id' ];

    public function user()
    {
      $this->belongsTo(User::class);
    }
    public function orentation()
    {
      $this->belongsTo(Orentation::class);
    }
}
