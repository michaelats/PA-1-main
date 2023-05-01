<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infowisata extends Model
{
    use HasFactory;
    protected $table = 'informasi_wisata';
    protected $primaryKey = 'id_info_wisata';
}
