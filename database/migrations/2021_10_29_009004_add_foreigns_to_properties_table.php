<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table
                ->foreign('keys_words_id')
                ->references('id')
                ->on('keys_words')
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
            $table->dropForeign(['keys_words_id']);
        });
    }
}
