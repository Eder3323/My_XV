<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;
    protected $table="invitado";


    protected $fillable = ['nombre', 'num_personas', 'comentarios'];
}
