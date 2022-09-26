<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateSanveToHappyNetComplimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('happy_net_compliment', function (Blueprint $table) {
            if(!schema::hasColumn('happy_net_compliment','DATE_SAVE')){
                $table->date('DATE_SAVE');
              
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('happy_net_compliment', function (Blueprint $table) {
            //
        });
    }
}
