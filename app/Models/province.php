<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    public function cities()
    {
        return $this->hasMany(city::class);
    }

    public function areacodes()
    {
        return $this->hasMany(areacode::class);
    }
}
