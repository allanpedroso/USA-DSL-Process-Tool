<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePqOptionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pq_option';

    /**
     * Run the migrations.
     * @table pq_option
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_pq_option');
            $table->integer('id_pq_option_group');
            $table->string('name');
            $table->string('value', 100);

            $table->index(["id_pq_option_group"], 'fk_pq_option_pq_option_group1_idx');


            $table->foreign('id_pq_option_group', 'fk_pq_option_pq_option_group1_idx')
                ->references('id_pq_answer_option')->on('pq_option_group')
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
