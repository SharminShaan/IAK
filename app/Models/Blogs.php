<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Blogs extends Model
{

    /**
     * Write code on Method
     *
     * @return response()
     */
    use Searchable;

    use HasFactory;
    protected $fillable = ['title','image','blog_cat_id','Date','short_description','long_description','quotation','tags'];
}
