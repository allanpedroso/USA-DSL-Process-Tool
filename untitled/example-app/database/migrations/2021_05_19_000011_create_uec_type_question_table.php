<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUecTypeQuestionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'uec_type_question';

    /**
     * Run the migrations.
     * @table uec_type_question
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_uec_type');
            $table->increments('id_uec_question');

            $table->index(["id_uec_question"], 'fk_uec_type_question_uec_question1_idx');

            $table->index(["id_uec_type"], 'fk_uec_type_question_uec_type1_idx');


            $table->foreign('id_uec_type', 'fk_uec_type_question_uec_type1_idx')
                ->references('id_uec_type')->on('uec_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_uec_question', 'fk_uec_type_question_uec_question1_idx')
                ->references('id_uec_question')->on('uec_question')
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
