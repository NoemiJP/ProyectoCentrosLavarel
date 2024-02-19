<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;
    protected $table="experiencias";
    protected $primaryKey="id";
    protected $fillable=["id", "titulo", "texto", "borrador","usuario_id"];
    protected $hidden=[];
}
