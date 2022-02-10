<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutor_id',
        'displayName',
        'nationality',
        'residence',
        'firstName',
        'lastName',
        'dob',
        'gender',
        'str',
        'state',
        'languages',
        'profileimage',
        'agreement',
        'eduinstitution',
        'course',
        'eduDegree',
        'edufrom',
        'eduto',
        'edudesc',
        'company',
        'position',
        'workfrom',
        'workto',
        'workdesc',
        'certyear',
        'certtitle',
        'certinstitution',
        'certdesc',
        'certfile',
        'aboutme',
        'lessonsdesc',
        'teachingmat',

        'introvideo',
    ];
    public function tutor(){
        return $this->belongsTo(Tutor::class,'tutor_id');
    }
}
