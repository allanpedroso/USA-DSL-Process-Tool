<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePqQuestionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pq_question';

    /**
     * Run the migrations.
     * @table pq_question
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_pq_question');
            $table->integer('id_profile_questionnaire');
            $table->integer('id_pq_option_group')->nullable();
            $table->string('name');
            $table->integer('multiplicity')->nullable();

            $table->index(["id_profile_questionnaire"], 'fk_pq_question_profile_questionnaire1_idx');

            $table->index(["id_pq_option_group"], 'fk_pq_question_pq_option_group1_idx');


            $table->foreign('id_pq_option_group', 'fk_pq_question_pq_option_group1_idx')
                ->references('id_pq_answer_option')->on('pq_option_group')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_profile_questionnaire', 'fk_pq_question_profile_questionnaire1_idx')
                ->references('id_profile_questionnaire')->on('profile_questionnaire')
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
