<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFromAndToToReturnproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('returnproducts', function (Blueprint $table) {
            $table->unsignedInteger('from');
            $table->unsignedInteger('to');
            $table->unsignedInteger('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('returnproducts', function (Blueprint $table) {
            //
        });
    }
}
