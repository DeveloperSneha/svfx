<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $primaryKey = 'idTestimonial';
    protected $table = 'testimonials';

    protected $fillable = ['name', 'reviews',' image', 'verified','isActive'];
}
