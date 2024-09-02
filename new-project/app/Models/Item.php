<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional if the table name is the plural form of the model name)
    protected $table = 'items';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'title',
        'description',
        'image',
        'author',
        'category_id'
    ];
    // Specify which attributes are cast to native types

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}

