<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtracolumnsToLoans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->string('doc1_6')->nullable();
            $table->string('doc1_7')->nullable();
            $table->string('doc1_8')->nullable();
            $table->string('doc1_9')->nullable();
            $table->string('doc1_10')->nullable();
            $table->string('doc1_11')->nullable();
            $table->string('doc1_12')->nullable();
            $table->string('doc1_13')->nullable();
            $table->string('doc1_14')->nullable();
            $table->string('doc1_15')->nullable();
            $table->string('doc1_16')->nullable();
            $table->string('doc1_17')->nullable();

            $table->string('doc2_6')->nullable();
            $table->string('doc2_7')->nullable();
            $table->string('doc2_8')->nullable();
            $table->string('doc2_9')->nullable();
            $table->string('doc2_10')->nullable();
            $table->string('doc2_11')->nullable();
            $table->string('doc2_12')->nullable();
            $table->string('doc2_13')->nullable();
            $table->string('doc2_14')->nullable();
            $table->string('doc2_15')->nullable();
            $table->string('doc2_16')->nullable();
            $table->string('doc2_17')->nullable();
         
            $table->string('doc3_10')->nullable();
            $table->string('doc3_11')->nullable();
            $table->string('doc3_12')->nullable();
            $table->string('doc3_13')->nullable();
            $table->string('doc3_14')->nullable();
            $table->string('doc3_15')->nullable();
            $table->string('doc3_16')->nullable();
            $table->string('doc3_17')->nullable();
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loans', function (Blueprint $table) {
            //
        });
    }
}
