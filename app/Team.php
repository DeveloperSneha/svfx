<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $primaryKey = 'idTeam';
    protected $table = 'team';

    protected $fillable = ['name', 'designation','image','isActive'];
}
