<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['tutor_id','user_id','datetime'];

    public function lesson(){
        return $this->hasMany(Lesson::class,'lesson_id');
    }


}
