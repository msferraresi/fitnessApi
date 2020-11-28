<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercises extends Model
{
    use SoftDeletes;
    protected $table = 'exercises';
    protected $primaryKey = 'id';
    protected $fillable = ["title", "description", "img", "leftColor", "rightColor"];

}
