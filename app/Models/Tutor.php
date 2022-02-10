<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
     protected $casts = [
        'languages' => 'array',
        'teachingmat' =>'array'
    ];

    protected $fillable =[
         'user_id', 'first_name','last_name', 'status'
    ];

    public function applicatiton(){
        return $this->hasOne(Application::class, 'tutor_id');
    }
}