<?php

namespace App\Models;

use App\Filters\GedungFilter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminates\Database\Eloquent\Builder;

class Gedung extends Model
{
    protected $table = 'data_gedung';
    protected $fillable = ['nama', 'alamat', 'kapasitas', 'foto'];
}
