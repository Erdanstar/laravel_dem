<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\QuizResult;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
      return $this->hasMany(Post::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
    public function quizResults()
    {
      return $this->hasMany(QuizResult::class);
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/users' . $this->image);
        }
    }

    public function uploadImage($image)
    {
    	if($image == null) { return; }

    	$this->removeImage();
    	$filename = str_random(10) . '.' . $image->getClientOriginalExtension();
    	$image->move(public_path('uploads/users'), $filename);
    	$this->image = $filename;
    	$this->save();
    }

    public function getAvatar()
    {
    	if($this->image == null)
    	{
    		return '/img/user-no-image.png';
    	}

    	return '/uploads/users/' . $this->avatar;

    }

}
