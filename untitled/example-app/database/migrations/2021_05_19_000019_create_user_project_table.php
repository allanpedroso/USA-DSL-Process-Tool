<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProjectTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_project';

    /**
     * Run the migrations.
     * @table user_project
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_user');
            $table->integer('id_project');
            $table->integer('id_user_type');
            $table->integer('classification')->nullable();
            $table->string('note_participation')->nullable();

            $table->index(["id_user_type"], 'fk_user_project_user_type1_idx');

            $table->index(["classification"], 'fk_user_project_crud1_idx');

            $table->index(["id_project"], 'fk_user_has_usability_evaluation_project_usability_evaluati_idx');

            $table->index(["id_user"], 'fk_user_has_usability_evaluation_project_user1_idx');


            $table->foreign('id_user', 'fk_user_has_usability_evaluation_project_user1_idx')
                ->references('id_user')->on('user')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_project', 'fk_user_has_usability_evaluation_project_usability_evaluati_idx')
                ->references('id_project')->on('project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user_type', 'fk_user_project_user_type1_idx')
                ->references('id_user_type')->on('user_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('classification', 'fk_user_project_crud1_idx')
                ->references('id_crud')->on('crud')
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
