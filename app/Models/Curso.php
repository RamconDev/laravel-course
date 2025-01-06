<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Campos que se van a permitir guardar
    protected $fillable = ['name', 'description', 'category'];

    // campos protegidos
    // protected $guarded = [];
}
