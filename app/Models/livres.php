<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livres extends Model
{
    use HasFactory;

    public function auteur() {
        return $this->belongsTo(Auteurs::class, 'id_auteur');
    }
}
