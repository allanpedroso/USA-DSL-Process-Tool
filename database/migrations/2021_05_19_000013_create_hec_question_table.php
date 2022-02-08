<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHecQuestionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'hec_question';

    /**
     * Run the migrations.
     * @table hec_question
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_hec_question');
            $table->integer('id_hec_heuristic');
            $table->string('description');

            $table->index(["id_hec_heuristic"], 'fk_hec_question_hec_heuristic1_idx');


            $table->foreign('id_hec_heuristic', 'fk_hec_question_hec_heuristic1_idx')
                ->references('id_hec_heuristic')->on('hec_heuristic')
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
