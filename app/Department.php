<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
   public $table = 'department';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];
}
