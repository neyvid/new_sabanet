<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(product::class);
    }

    public function childrens()
    {
        return $this->hasMany(category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(category::class, 'parent_id');
    }
}
