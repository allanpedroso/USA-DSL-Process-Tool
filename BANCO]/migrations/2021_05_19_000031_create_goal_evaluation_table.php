<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalEvaluationTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'goal_evaluation';

    /**
     * Run the migrations.
     * @table goal_evaluation
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_goal');
            $table->integer('id_user');
            $table->integer('id_project');
            $table->integer('id_status')->comment('Cadastrar na tabela crud os valores para status (completed, not completed, partially completed) ');
            $table->string('note')->nullable();

            $table->index(["id_user", "id_project"], 'fk_goal_has_user_project_user_project1_idx');

            $table->index(["id_goal"], 'fk_goal_has_user_project_goal1_idx');

            $table->index(["id_status"], 'fk_goal_evaluation_crud2_idx');


            $table->foreign('id_goal', 'fk_goal_has_user_project_goal1_idx')
                ->references('id_goal')->on('goal')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user', 'fk_goal_has_user_project_user_project1_idx')
                ->references('id_user')->on('user_project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_status', 'fk_goal_evaluation_crud2_idx')
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
