<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

	public function upvote()
	{
		// select count(*) from votes where user_id = 4
		// select * from votes where vote = 1;
		return $this->votes()->where('vote', 1);

	}
    

    public function downvote()
    {
    	return $this->votes()->where('vote', 0);
    }
}
