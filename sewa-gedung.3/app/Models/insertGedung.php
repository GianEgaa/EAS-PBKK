<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insertGedung extends Model
{
    protected $table = 'data_gedung';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'capacity', 'contact', 'image', 'price', 'city', 'description'];

}