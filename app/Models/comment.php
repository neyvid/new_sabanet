<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function commentable()
    {
        return $this->morphTo();
    }
    public function replies()
    {

        return $this->hasMany(comment::class,'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(comment::class,'parent_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
