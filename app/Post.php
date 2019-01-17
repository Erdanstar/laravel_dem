<?php

namespace App;

use Carbon\Carbon;
use \Storage;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Language;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title','content'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
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
      $post = new static;
    	$post->fill($fields);
    	$post->save();

    	return $post;
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

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }


}
