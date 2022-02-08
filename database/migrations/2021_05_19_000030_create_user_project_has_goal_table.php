<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProjectHasGoalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_project_has_goal';

    /**
     * Run the migrations.
     * @table user_project_has_goal
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_project_id_user');
            $table->integer('user_project_id_project');
            $table->integer('goal_id_goal');

            $table->index(["user_project_id_user", "user_project_id_project"], 'fk_user_project_has_goal_user_project1_idx');

            $table->index(["goal_id_goal"], 'fk_user_project_has_goal_goal1_idx');


            $table->foreign('user_project_id_user', 'fk_user_project_has_goal_user_project1_idx')
                ->references('id_user')->on('user_project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('goal_id_goal', 'fk_user_project_has_goal_goal1_idx')
                ->references('id_goal')->on('goal')
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
