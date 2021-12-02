<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUecAnswerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'uec_answer';

    /**
     * Run the migrations.
     * @table uec_answer
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_uec_answer');
            $table->integer('id_uec_question');
            $table->integer('id_uec_type');
            $table->integer('id_usability_evaluation_checklist');
            $table->integer('id_user');
            $table->integer('id_project');
            $table->string('description')->nullable();
            $table->integer('severity');

            $table->index(["id_uec_question", "id_uec_type"], 'fk_uec_answer_uec_type_question1_idx');

            $table->index(["id_user", "id_project"], 'fk_uec_answer_user_project1_idx');

            $table->index(["id_usability_evaluation_checklist"], 'fk_uec_answer_usability_evaluation_checklist1_idx');


            $table->foreign('id_uec_question', 'fk_uec_answer_uec_type_question1_idx')
                ->references('id_uec_question')->on('uec_type_question')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usability_evaluation_checklist', 'fk_uec_answer_usability_evaluation_checklist1_idx')
                ->references('id_usability_evaluation_checklist')->on('usability_evaluation_checklist')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_user', 'fk_uec_answer_user_project1_idx')
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
