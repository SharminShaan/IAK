<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'type_id', 'type_name', 'name', 'email', 'phone', 'address', 'image', 'doc_file', 'service_type', 'service_name', 'message'];
}
