<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
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
