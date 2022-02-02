<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'crud';

    /**
     * Run the migrations.
     * @table crud
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_crud');
            $table->integer('id_crud_type');
            $table->string('name', 45);
            $table->string('description')->nullable();

            $table->index(["id_crud_type"], 'fk_crud_crud_type_idx');

            $table->unique(["id_crud"], 'id_crud_UNIQUE');


            $table->foreign('id_crud_type', 'fk_crud_crud_type_idx')
                ->references('id_crud_type')->on('crud_type')
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
