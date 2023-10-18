<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TawzefModel extends Model
{
    use HasFactory;
    public function quilifaction()
    {
        return $this->belongsTo(Qualification::class ,'qulifaction' , 'id' ) ;
    }
}
