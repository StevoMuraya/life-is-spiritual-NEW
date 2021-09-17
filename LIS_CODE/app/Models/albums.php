<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class albums extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
    ];

    public function photos(){
        return $this->hasMany(Gallery::class);
    }
}
