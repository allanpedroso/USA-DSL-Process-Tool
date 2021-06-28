<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'scenario';

    /**
     * Run the migrations.
     * @table scenario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_scenario');
            $table->integer('id_project');
            $table->string('name', 45);
            $table->string('description');
            $table->time('expected_time');

            $table->index(["id_project"], 'fk_scenario_project1_idx');


            $table->foreign('id_project', 'fk_scenario_project1_idx')
                ->references('id_project')->on('project')
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
