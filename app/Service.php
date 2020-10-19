<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'idService';
    protected $table = 'services';

    protected $fillable = ['serviceName', 'description','price','icon','url','isActive'];
}
