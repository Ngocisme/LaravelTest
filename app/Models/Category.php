<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    protected $guarded = [];
}
