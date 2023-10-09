<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFacrory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{


    protected $fillable = [
        'nom', 
        'prenom',
        'classe',
    ];

    public function supprimer()
    {
        $this->delete();
    }
}
