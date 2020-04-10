<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbArticleCategory extends Model
{
    protected $table = 'ab_articlecategory';

    // Prevent Mass Assignment
    protected $guarded = [];

    public $timestamps = false;
}
