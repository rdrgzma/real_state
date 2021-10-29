<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table
                ->foreign('office_id')
                ->references('id')
                ->on('offices')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('realtor_id')
                ->references('id')
                ->on('realtors')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['office_id']);
            $table->dropForeign(['realtor_id']);
        });
    }
}
