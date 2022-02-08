<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeuristicEvaluationChecklistTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'heuristic_evaluation_checklist';

    /**
     * Run the migrations.
     * @table heuristic_evaluation_checklist
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_heuristic_evaluation_checklist');
            $table->integer('id_user');
            $table->integer('id_project');
            $table->integer('id_hec_type');
            $table->integer('id_hec_question');
            $table->string('description');
            $table->tinyInteger('severity')->comment('0 to 4');

            $table->index(["id_hec_type", "id_hec_question"], 'fk_heuristic_evaluation_checklist_hec_type_question1_idx');

            $table->index(["id_user", "id_project"], 'fk_heuristic_evaluation_checklist_user_project1_idx');


            $table->foreign('id_user', 'fk_heuristic_evaluation_checklist_user_project1_idx')
                ->references('id_user')->on('user_project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_hec_type', 'fk_heuristic_evaluation_checklist_hec_type_question1_idx')
                ->references('id_hec_type')->on('hec_type_question')
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
