<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areacode extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function city()
    {
        return $this->belongsTo(city::class);
    }

    public function province()
    {
        return $this->belongsTo(province::class);
    }

    public function oprators()
    {
        return $this->belongsToMany(oprator::class);
    }

    public function telecomcenter()
    {
        return $this->belongsTo(telecomCenter::class);
    }
}
