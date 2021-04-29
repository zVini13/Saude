<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroSaude extends Model
{
    use HasFactory;
    public function usuario()
    {
        return $this->hasMany(Usuario::class);
    }
    public function medico()
    {
        return $this->hasMany(Medico::class);
    }
    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }


    public $table = 'centrossaude';
}
