<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_name',
        'phone_number',
        'shipping_address',
        'book_id',
        'postal_code',
        'quantity',
        'total_price',
        'status',
    ];
}
