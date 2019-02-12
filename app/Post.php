<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

//*
//Establecemos las relaciones entre Post y el resto:
//Uno a muchos -> belongsToMany(Model::class);
//Una a Uno -> belongsTo(Model::tag);
//*

	protected $fillable = [
		'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
