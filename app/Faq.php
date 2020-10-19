<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $primaryKey = 'idFaq';
    protected $table = 'faqs';

    protected $fillable = ['question', 'answer','isActive'];
}
