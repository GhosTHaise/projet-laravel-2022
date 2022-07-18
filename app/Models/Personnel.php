<?php

namespace App\Models;

use App\Models\Poste;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;


    public function poste()
    {
        return $this->belongsTo(Poste::class);
    }
}
