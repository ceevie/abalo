<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbUser extends Model
{
    protected $table = 'ab_user';

    // Prevent Mass Assignment
    protected $guarded = [];

    public $timestamps = false;
}
