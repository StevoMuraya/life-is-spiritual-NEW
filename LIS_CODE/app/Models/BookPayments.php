<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPayments extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'book_title',
        'amount',
        'book_id',
        'user_id',
        'transaction_id',
        'confirmed',
    ];

    public function book(){
        return $this->belongsTo(Books::class);
    }

}
