<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','slug','content','image','category_id','visit_count','author_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'author_id');
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
