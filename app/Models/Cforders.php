<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cforders extends Model
{
    use HasFactory;

    protected $table = 'cforders';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'CustomerID',
        'OrderDate',
        'TotalPrice',
        'Payment',
        'Address',
        'Status',
        'created_at',
        'updated_at'
    ];
}
