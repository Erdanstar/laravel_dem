<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Orentation;
use App\Quiz;
use App\ResultProfession;

class QuizResult extends Model
{
    protected $fillable = [ 'user_id', 'quiz_id', 'orentation_id', 'profession_id', 'lang_id' ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function orentation()
    {
      return $this->belongsTo(Orentation::class);
    }

    public function quiz()
    {
      return $this->belongsTo(Quiz::class);
		}
		
		public function profession(){
			return $this->belongsTo(ResultProfession::class);
		}
}
