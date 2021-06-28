<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileQuestionnaireAnswerTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'profile_questionnaire_answer';

    /**
     * Run the migrations.
     * @table profile_questionnaire_answer
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_pq_answer');
            $table->integer('id_user');
            $table->integer('id_project');
            $table->integer('id_pq_question');
            $table->integer('id_pq_option')->nullable();
            $table->string('other')->nullable();

            $table->index(["id_pq_question"], 'fk_profile_questionnaire_answer_pq_question1_idx');

            $table->index(["id_user", "id_project"], 'fk_profile_questionnaire_answer_user_project1_idx');

            $table->index(["id_pq_option"], 'fk_profile_questionnaire_answer_pq_option1_idx');


            $table->foreign('id_user', 'fk_profile_questionnaire_answer_user_project1_idx')
                ->references('id_user')->on('user_project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_pq_question', 'fk_profile_questionnaire_answer_pq_question1_idx')
                ->references('id_pq_question')->on('pq_question')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_pq_option', 'fk_profile_questionnaire_answer_pq_option1_idx')
                ->references('id_pq_option')->on('pq_option')
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
