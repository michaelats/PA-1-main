<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infostatistik extends Model
{
    use HasFactory;
    protected $table = 'informasi_statistik';
    protected $primaryKey = 'id_info_statistik';
}
