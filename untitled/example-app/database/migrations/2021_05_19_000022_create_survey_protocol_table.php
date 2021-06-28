<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyProtocolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'survey_protocol';

    /**
     * Run the migrations.
     * @table survey_protocol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_survey');
            $table->integer('id_protocol');
            $table->string('study_design')->nullable();
            $table->string('data_preparation_collection')->nullable();
            $table->string('analysis')->nullable();
            $table->string('reporting')->nullable();

            $table->index(["id_protocol"], 'fk_survey_protocol_protocol1_idx');


            $table->foreign('id_protocol', 'fk_survey_protocol_protocol1_idx')
                ->references('id_protocol')->on('protocol')
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
