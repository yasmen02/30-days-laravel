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
        'slug',
        'title',
        'description',
        'image',
        'author_id',
        'category_id',
        'status'
    ];
    // Specify which attributes are cast to native types

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

