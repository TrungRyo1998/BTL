<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';
    protected $primaryKey = 'id';
    protected $fillable=['image','content'];
}
