<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'slug', 'user_id', 'image', 'category_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'user_id', 'category_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
