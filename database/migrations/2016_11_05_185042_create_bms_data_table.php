<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBmsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bms_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bms_id');
            $table->float('soc')->comment = '剩余电量';
            $table->float('soh')->comment = '健康状况';
            $table->float('vol')->comment = '电压';
            $table->float('res')->comment = '电阻';
            $table->float('longitude')->comment = '经度';
            $table->float('latitude')->comment = '维度';
            $table->float('altitude')->comment = '海拔';
            $table->float('speed')->comment = '速度';
            $table->integer('locate_mode')->comment = '定位模式';
            $table->integer('satellite')->comment = '卫星数';
            $table->float('temp')->comment = '温度';
            $table->float('current')->comment = '工作电流';
            $table->integer('charge')->comment = '充放电状态，1充电，2放电';
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
        Schema::drop('bms_data');
    }
}
