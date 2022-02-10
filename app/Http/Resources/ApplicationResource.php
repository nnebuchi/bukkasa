<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            
            'displayName' => $this->displayName,
            'nationality' => $this->nationality,
            'residence' => $this->residence,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'dob' => $this->dob,
            'gender' => $this->gender,
            'str' => $this->str,
            'state' => $this->state,
            'languages' => $this->languages,
            'profileimage' => url('') . '/storage/images/' . $this->profileimage,
            'agreement' => $this->agreement,
            'eduinstitution' => $this->eduinstitution,
            'course' => $this->course,
            'eduDegree' => $this->eduDegree,
            'edufrom' => $this->edufrom,
            'eduto' => $this->eduto,
            'edudesc' => $this->edudesc,
            'company' => $this->company,
            'position' => $this->position,
            'workfrom' => $this->workflow,
            'workto' => $this->workto,
            'workdesc' => $this->workdesc,
            'certyear' => $this->certyear,
            'certtitle' => $this->certtitle,
            'certinstitution' => $this->certinstitution,
            'certdesc' => $this->certdesc,
            'certfile' => url('/') . '/storage/certificate/' . $this->certfile,
            'aboutme' => $this->aboutme,
            'lessonsdesc' => $this->lessonsdesc,
            'teachingmat' => $this->teachingmat,
            'introvideo' => url('/') . '/storage/introvideos/' . $this->introvideos,
        ];
    }
}