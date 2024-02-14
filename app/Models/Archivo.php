<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $table="archivos";
    protected $primaryKey="id";
    protected $fillable=["archivo","experiencias_id"];
    protected $hidden=["id"];
}
