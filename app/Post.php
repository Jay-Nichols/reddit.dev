<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	protected $table = 'posts';
	// use SoftDeletes;
	
	public static $rules = array(
            'title' => 'required|max:75',
            'url' => 'required',
            'content' => 'required'
    );
	// public function user()
	// {
	// 	return $this->belongsTo('App\User', 'created_by', 'id');
	// }

	public function author()
	{
		return $this->belongsTo(User::class, 'created_by');

	}


	public static function search ($keyword)
	{
		return Post::where('title', "like", "%$keyword%")->get();

	}

	public static function count($userId)
	{
		return DB::table('posts')->where('created_by', $userId)->count();
	}
	
    public function user()
    {
    	return $this->belongsTo(User::class, 'created_by');
    }
	
    //
}
