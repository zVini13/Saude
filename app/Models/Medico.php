<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    public function consulta()
    {
        return $this->hasMany(Consulta::class);
    }
    public function centrossaude()
    {
        return $this->hasMany(CentroSaude::class);
    }
    public function especialidade()
    {
        return $this->hasMany(Especialidade::class);
    }
    public function plantao()
    {
        return $this->hasMany(Plantao::class);
    }

}
