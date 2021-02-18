<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book_library extends Model
{

    protected $fillable = [
        'id', 'bookName', 'bookDescription', 'bookISBN', 'bookPublisher', 'bookType', 'bookPrice',
        'bookFile', 'bookState', 'bookQuantity', 'bookShelf',

    ];
}
