<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $primaryKey = 'idPortfolio';
    protected $table = 'portfolios';

    protected $fillable = ['idService', 'image', 'video','isActive'];

    public function service() {
        return $this->belongsTo(Service::class, 'idService', 'idService');
    }
}
