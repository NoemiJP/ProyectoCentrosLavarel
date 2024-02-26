<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    protected $table = "calendario";
    protected $primaryKey = "id";
    protected $fillable = ["nombre", "imagen", "siembra", "semillero",  "transplante", "cosecha"];
    protected $hidden = ["id"];
}
