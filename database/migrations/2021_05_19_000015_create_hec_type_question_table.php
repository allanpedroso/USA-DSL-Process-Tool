<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHecTypeQuestionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hec_type_question';

    /**
     * Run the migrations.
     * @table hec_type_question
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_hec_type');
            $table->increments('id_hec_question');

            $table->index(["id_hec_type"], 'fk_hec_type_has_hec_question_hec_type1_idx');

            $table->index(["id_hec_question"], 'fk_hec_type_has_hec_question_hec_question1_idx');


            $table->foreign('id_hec_type', 'fk_hec_type_has_hec_question_hec_type1_idx')
                ->references('id_hec_type')->on('hec_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_hec_question', 'fk_hec_type_has_hec_question_hec_question1_idx')
                ->references('id_hec_question')->on('hec_question')
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
