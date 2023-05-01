<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuliner_wis extends Model
{
    use HasFactory;
    protected $table = 'kuliner';
    protected $primaryKey = 'id_kuliner';
}
