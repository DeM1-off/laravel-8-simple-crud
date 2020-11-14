<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModal extends Model
{

    protected $table = 'products';


    protected $fillable = [
        'name', 'detail'
    ];

}
