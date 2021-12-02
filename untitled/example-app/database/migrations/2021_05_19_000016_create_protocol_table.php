<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtocolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'protocol';

    /**
     * Run the migrations.
     * @table protocol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_protocol');
            $table->integer('id_project');
            $table->string('main_research_question')->nullable();
            $table->string('additional_research_questions')->nullable();
            $table->string('study_objective')->nullable();

            $table->index(["id_project"], 'fk_protocol_project1_idx');


            $table->foreign('id_project', 'fk_protocol_project1_idx')
                ->references('id_project')->on('project')
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
