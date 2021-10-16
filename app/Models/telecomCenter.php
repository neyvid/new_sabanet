<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telecomCenter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function areacodes()
    {
        return $this->hasMany(areacode::class);
    }

    public function city()
    {
        return $this->belongsTo(city::class);
    }
}
