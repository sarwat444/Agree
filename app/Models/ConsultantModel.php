<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantModel extends Model
{
    use HasFactory;
    public function quilifaction_data()
    {
        return $this->belongsTo(Qualification::class ,'quilifaction' , 'id' ) ;
    }
    public function experience()
    {
        return $this->belongsTo(ExperienceField::class ,'experience_filed' , 'id' ) ;
    }



}
