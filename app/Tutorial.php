<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $primaryKey = 'idTutorial';
    protected $table = 'tutorials';

    protected $fillable = ['videoUrl', 'image', 'name','isActive'];
}
