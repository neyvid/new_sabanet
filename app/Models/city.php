<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function province()
    {
        return $this->belongsTo(province::class);
    }

    public function areacodes()
    {
        return $this->hasMany(areacode::class);
    }

    public function telecomecenters()
    {
        return $this->hasMany(telecomCenter::class);
    }

}
