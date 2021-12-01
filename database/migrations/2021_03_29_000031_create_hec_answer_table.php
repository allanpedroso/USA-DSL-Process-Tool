<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHecAnswerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hec_answer';

    /**
     * Run the migrations.
     * @table hec_answer
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_hec_answer');
            $table->integer('id_hec_question');
            $table->integer('id_hec_type');
            $table->integer('id_heuristic_evaluation_checklist');
            $table->integer('id_user');
            $table->integer('id_project');
            $table->string('description')->nullable();
            $table->integer('severity');

            $table->index(["id_heuristic_evaluation_checklist"], 'fk_hec_answer_heuristic_evaluation_checklist1_idx');

            $table->index(["id_hec_question", "id_hec_type"], 'fk_hec_answer_hec_type_question1_idx');

            $table->index(["id_user", "id_project"], 'fk_hec_answer_user_project1_idx');


            $table->foreign('id_hec_question', 'fk_hec_answer_hec_type_question1_idx')
                ->references('id_hec_question')->on('hec_type_question')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_heuristic_evaluation_checklist', 'fk_hec_answer_heuristic_evaluation_checklist1_idx')
                ->references('id_heuristic_evaluation_checklist')->on('heuristic_evaluation_checklist')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user', 'fk_hec_answer_user_project1_idx')
                ->references('id_user')->on('user_project')
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
