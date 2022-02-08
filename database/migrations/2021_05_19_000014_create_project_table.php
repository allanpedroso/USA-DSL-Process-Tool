<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'project';

    /**
     * Run the migrations.
     * @table project
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_project');
            $table->integer('id_usability_evaluation');
            $table->integer('id_empirical_method');
            $table->integer('id_reporting_type');
            $table->integer('id_data_storage');
            $table->integer('id_execution_place');
            $table->integer('id_schedule');
            $table->string('name', 100);
            $table->string('description');

            $table->index(["id_schedule"], 'fk_project_schedule1_idx');

            $table->index(["id_empirical_method"], 'fk_project_crud1_idx');

            $table->index(["id_reporting_type"], 'fk_project_crud2_idx');

            $table->index(["id_execution_place"], 'fk_project_crud4_idx');

            $table->index(["id_usability_evaluation"], 'fk_usability_evaluation_project_crud1_idx');

            $table->index(["id_data_storage"], 'fk_project_crud3_idx');


            $table->foreign('id_usability_evaluation', 'fk_usability_evaluation_project_crud1_idx')
                ->references('id_crud')->on('crud')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_empirical_method', 'fk_project_crud1_idx')
                ->references('id_crud')->on('crud')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_reporting_type', 'fk_project_crud2_idx')
                ->references('id_crud')->on('crud')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_data_storage', 'fk_project_crud3_idx')
                ->references('id_crud')->on('crud')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_execution_place', 'fk_project_crud4_idx')
                ->references('id_crud')->on('crud')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_schedule', 'fk_project_schedule1_idx')
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
