<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperimentProtocolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'experiment_protocol';

    /**
     * Run the migrations.
     * @table experiment_protocol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_experiment_protocol');
            $table->integer('id_protocol');
            $table->string('planning')->nullable();
            $table->string('scope')->nullable();
            $table->string('operation')->nullable();
            $table->string('analysis_interpretation')->nullable();
            $table->string('presentation_package')->nullable();

            $table->index(["id_protocol"], 'fk_experiment_protocol_protocol1_idx');


            $table->foreign('id_protocol', 'fk_experiment_protocol_protocol1_idx')
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
