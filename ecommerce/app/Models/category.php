<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // Spécifie le nom de la table si elle est différente du nom du modèle au pluriel
    protected $fillable = ['category', 'type_category'];
    public $timestamps = false; 


}
 