<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantao extends Model
{
    use HasFactory;
    public function medico()
    {
        return $this->hasMany(Medico::class);
    }
}
