<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use SoftDeletes;
	
	public static $rules = array(
            'title' => 'required',
            'url' => 'required',
            'content' => 'required'
        );
	public function user()
	{
		return $this->belongsTo('App\User', 'created_by', 'id');
	}

	
       
	
    //
}
