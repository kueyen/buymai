<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title','description','howto_description','price','discount','image_url','is_recommmend'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
