<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoworkJobPersonPermissionListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!schema::hasTable('infowork_job_person_permission_list')){
            Schema::create('infowork_job_person_permission_list', function (Blueprint $table) {
                $table->id('IWJOB_PERMIS_LIST_ID');
                $table->bigInteger('IWJOB_PERMIS_ID');
                $table->bigInteger('IWJOB_PERMIS_LIST_PERSON_ID');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infowork_job_person_permission_list');
    }
}
