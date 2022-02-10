<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['tutor_id','title','language','duration','price'];

    public function events(){
        return $this->belongsTo(Events::class,'event_id');
    }
}