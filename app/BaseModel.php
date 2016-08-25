<?php

namespace App\Mode;

use Illuminate\Database\Eloquent\Model;
use Carbon/Carbon;

class BaseModel extends Model
{
	public function getCreatedAtAttribute($value)
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
	}
    //

    public function getUpdatedAtAttribure($value)
    {
    	$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
}
