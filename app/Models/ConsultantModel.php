<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantModel extends Model
{
    use HasFactory;
    public function quilifaction()
    {
        return $this->belongsTo(Qualification::class ,'qualification_id' , 'id' ) ;
    }
    public function experience()
    {
        return $this->belongsTo(ExperienceField::class ,'experience_filed' , 'id' ) ;
    }



}
