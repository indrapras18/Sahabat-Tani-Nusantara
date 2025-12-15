<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
    use HasFactory;

    protected $table = 'stock_ins';

    protected $fillable = [
        'item_name',
        'qty',
        'date',
        'note',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
