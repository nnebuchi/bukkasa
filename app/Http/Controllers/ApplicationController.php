<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tutor = new Application();
        $tutor->tutor_id = Tutor::where('user_id',$request->user_id)->first()->id;
        $tutor->displayName = $request->displayName;
        $tutor->nationality = $request->nationality;
        $tutor->residence = $request->residence;
        $tutor->firstName = $request->firstName;
        $tutor->lastName = $request->lastName;
        $tutor->dob = $request->dob;
        $tutor->gender = $request->gender;
        $tutor->str = $request->str;
        $tutor->state = $request->state;
        $tutor->languages = $request->languages;

        $tutor->agreement  = $request->agreement;
        $tutor->eduinstitution = $request->eduinstitution;
        $tutor->course  = $request->course;
        $tutor->eduDegree = $request->eduDegree;
        $tutor->edufrom = $request->edufrom;
        $tutor->eduto  = $request->eduto;
        $tutor->edudesc = $request->edudesc;
        $tutor->company = $request->company;
        $tutor->position = $request->position;
        $tutor->workfrom   = $request->workfrom;
        $tutor->workto = $request->workto;
        $tutor->workdesc = $request->workdesc;
        $tutor->certyear = $request->certyear;
        $tutor->certtitle = $request->certtitle;
        $tutor->certinstitution = $request->certinstitution;
        $tutor->certdesc = $request->certdesc;

        $tutor->aboutme = $request->aboutme;
        $tutor->lessonsdesc = $request->lessonsdesc;
        $tutor->teachingmat = $request->teachingmat;

        $imageName = '';
        $intro = '';
        $CName = '';
        if ($request->hasFile('certfile')) {

            $CName = time() . '.' . $request->certfile->extension();

            $request->certfile->move(public_path('storage/certificate'), $CName);
        }
        if ($request->hasFile('profileimage')) {

            $imageName = time() . '.' . $request->profileimage->extension();

            $request->profileimage->move(public_path('storage/images'), $imageName);
        }
        if ($request->hasFile('introvideo')) {

            $intro = time() . '.' . $request->introvideo->extension();

            $request->introvideo->move(public_path('storage/introvideos'), $intro);
        }
        $tutor->certfile = $CName;
        $tutor->profileimage = $imageName;
        $tutor->introvideo = $intro;
        if($tutor->save()){
            $tut = Tutor::where('user_id',$request->user_id)->first();
            $tut->status = 1;
            $tut->save();
            $user = User::find($request->user_id);
            $user->status = 1;
            $user->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
