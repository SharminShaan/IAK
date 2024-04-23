<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_categories extends Model
{
    use HasFactory;
    protected $fillable = ['sub_cat_name', 'image', 'cat_id'];

    public function category(){
    	return $this->belongsTo(Category::class);
    }


}
