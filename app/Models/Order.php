<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'width',
        'height',
        'place',
        'color',
        'description',
        'create_at',
        'updated_at'
    ];
}
