<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'goal';

    /**
     * Run the migrations.
     * @table goal
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_goal');
            $table->integer('id_scenario');
            $table->string('goalcol', 45)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('description')->nullable();

            $table->index(["id_scenario"], 'fk_scenario_goal_scenario1_idx');


            $table->foreign('id_scenario', 'fk_scenario_goal_scenario1_idx')
                ->references('id_scenario')->on('scenario')
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
