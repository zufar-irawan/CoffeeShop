<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CfordersDetail extends Model
{
    use HasFactory;
    protected $table = 'cfordersdetail';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'OrderID',
        'ProductID',
        'Quantity',
        'Subtotal',
        'created_at',
        'updated_at'
    ];
}
