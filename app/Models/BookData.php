<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookData extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function payment_mode(){
        return $this->belongsTo(PaymentMode::class);
    }
}
