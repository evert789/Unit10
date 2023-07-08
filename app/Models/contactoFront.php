<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactoFront extends Model
{
    use HasFactory;
    protected $table ="contacto_fronts";
    protected $primaryKey ="id";
    protected $fillable =["nombre", "email","mensaje"];
}
