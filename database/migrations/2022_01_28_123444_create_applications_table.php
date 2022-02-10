<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('displayName');
            $table->string('nationality');
            $table->string('residence');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('dob');
            $table->string('gender');
            $table->string('str');
            $table->string('state');
            $table->json('languages');
            $table->string('profileimage');
            $table->string('agreement');
            $table->string('eduinstitution');
            $table->string('course');
            $table->string('eduDegree');

            $table->string('edufrom');
            $table->string('eduto');
            $table->string('edudesc');
            $table->string('company');
            $table->string('position');
            $table->string('workfrom');
            $table->string('workto');
            $table->string('workdesc');
            $table->string('certyear');
            $table->string('certtitle');
            $table->string('certinstitution');
            $table->string('certdesc');
            $table->string('certfile');
            $table->string('aboutme');
            $table->string('lessonsdesc');
            $table->json('teachingmat');
            $table->string('introvideo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
