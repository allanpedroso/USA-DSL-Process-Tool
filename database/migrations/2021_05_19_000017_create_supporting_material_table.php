<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportingMaterialTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'supporting_material';

    /**
     * Run the migrations.
     * @table supporting_material
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_supporting_material');
            $table->integer('id_link')->nullable();
            $table->integer('id_project');
            $table->string('hash_name', 45);
            $table->string('file_name', 45);
            $table->string('link', 100)->nullable();

            $table->index(["id_project"], 'fk_file_project1_idx');

            $table->index(["id_link"], 'fk_supporting_material_crud1_idx');


            $table->foreign('id_project', 'fk_file_project1_idx')
                ->references('id_project')->on('project')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_link', 'fk_supporting_material_crud1_idx')
                ->references('id_crud')->on('crud')
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
