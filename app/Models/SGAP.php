<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SGAP extends Model
{
    use HasFactory;

    protected $fillable = ['gap_models'] ;

    public function quilifaction()
    {
        return $this->belongsTo(Qualification::class ,'qualification_id' , 'id' ) ;
    }
}
