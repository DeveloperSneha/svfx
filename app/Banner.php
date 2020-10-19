<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primaryKey = 'idBanner';
    protected $table = 'banner';

    protected $fillable = ['name', 'image','isActive'];
}
