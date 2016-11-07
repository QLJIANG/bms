<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bat_data', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bat_id');
            $table->float('soc')->comment = '剩余电量';
            $table->float('soh')->comment = '健康状况';
            $table->float('vol')->comment = '电压';
            $table->float('res')->comment = '电阻';
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bat_data');
    }
}
