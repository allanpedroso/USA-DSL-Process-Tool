<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStudyProtocolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'case_study_protocol';

    /**
     * Run the migrations.
     * @table case_study_protocol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_case_study');
            $table->integer('id_protocol');
            $table->text('design')->nullable();
            $table->string('case_selection')->nullable();
            $table->string('procedures_roles')->nullable();
            $table->string('data_collection')->nullable();
            $table->string('analysis')->nullable();
            $table->string('plan_validity')->nullable();
            $table->string('study_limitation')->nullable();

            $table->index(["id_protocol"], 'fk_case_study_protocol_protocol2_idx');


            $table->foreign('id_protocol', 'fk_case_study_protocol_protocol2_idx')
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
