<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Admin extends Eloquent
{
    //
    protected $connection = 'mongodb';
	protected $collection = 'Visits';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dateTime', 'ip'
    ];
}
