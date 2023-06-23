<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    protected $table='advert';
    protected $fillable=['fromwhere','towhere','when','car','price','nickname'];
}
