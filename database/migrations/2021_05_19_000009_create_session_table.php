<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'session';

    /**
     * Run the migrations.
     * @table session
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_execution');
            $table->integer('id_schedule');
            $table->date('date')->nullable();
            $table->time('time')->nullable();

            $table->index(["id_schedule"], 'fk_session_schedule1_idx');


            $table->foreign('id_schedule', 'fk_session_schedule1_idx')
                ->references('id_schedule')->on('schedule')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
