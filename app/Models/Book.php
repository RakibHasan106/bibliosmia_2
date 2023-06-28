<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_name',
        'author_name',
        'author_id',
        'slug',
        'price',
        'quantity',
        'book_category_id',
        'book_category_name',
        'book_publisher_id',
        'book_publisher_name',
        'book_description',
        'book_page_no',
        'book_publish_date',
        'book_img',
    ];
}
