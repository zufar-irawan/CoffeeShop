<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cfproducts extends Model
{
    use HasFactory;

    protected $table = 'cfproducts';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'ProductName',
        'Category',
        'Price',
        'Size',
        'Description',
        'Image1',
        'Image2',
        'Image3',
        'created_at',
        'updated_at'
    ];
}
