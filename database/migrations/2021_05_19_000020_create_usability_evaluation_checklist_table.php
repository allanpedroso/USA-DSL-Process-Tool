<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsabilityEvaluationChecklistTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usability_evaluation_checklist';

    /**
     * Run the migrations.
     * @table usability_evaluation_checklist
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_usability_evaluation_checklist');
            $table->integer('id_user');
            $table->integer('id_project');
            $table->integer('id_uec_question');
            $table->integer('id_uec_type');
            $table->string('description');
            $table->tinyInteger('severity');

            $table->index(["id_user", "id_project"], 'fk_usability_evaluation_checklist_user_project1_idx');

            $table->index(["id_uec_question", "id_uec_type"], 'fk_usability_evaluation_checklist_uec_type_question1_idx');


            $table->foreign('id_user', 'fk_usability_evaluation_checklist_user_project1_idx')
                ->references('id_user')->on('user_project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_uec_question', 'fk_usability_evaluation_checklist_uec_type_question1_idx')
                ->references('id_uec_question')->on('uec_type_question')
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
