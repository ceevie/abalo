<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbArticle extends Model
{
    protected $table = 'ab_article';

    // Prevent Mass Assignment
    protected $guarded = [];

    public $timestamps = false;
}
