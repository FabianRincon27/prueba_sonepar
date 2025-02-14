<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaccionInventario extends Model
{
    use HasFactory;

    public function material(){
        return $this->belongsTo(MaterialElectrico::class, 'material_electrico_id');
    }
}
