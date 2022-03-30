<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoanColuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loans', function (Blueprint $table) {

            $table->string('doc1_1')->nullable();
            $table->string('doc1_2')->nullable();
            $table->string('doc1_3')->nullable();
            $table->string('doc1_4')->nullable();
            $table->string('doc1_5')->nullable();

            $table->string('doc2_1')->nullable();
            $table->string('doc2_2')->nullable();
            $table->string('doc2_3')->nullable();
            $table->string('doc2_4')->nullable();
            $table->string('doc2_5')->nullable();

            $table->string('doc3_1')->nullable();
            $table->string('doc3_2')->nullable();
            $table->string('doc3_3')->nullable();
            $table->string('doc3_4')->nullable();
            $table->string('doc3_5')->nullable();
            $table->string('doc3_6')->nullable();
            $table->string('doc3_7')->nullable();
            $table->string('doc3_8')->nullable();
            $table->string('doc3_9')->nullable();

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
