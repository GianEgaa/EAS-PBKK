<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insertDate extends Model
{
    protected $table = 'data_booking';
    protected $primaryKey = 'id';
    protected $fillable = ['reservationDate', 'id_gedung', 'user_id'];

}