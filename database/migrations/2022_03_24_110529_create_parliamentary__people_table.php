<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParliamentaryPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parliamentary__people', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('posision')->nullable();
            $table->string('session')->nullable();
            $table->longText('ps_history')->nullable();
            $table->longText('info')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parliamentary__people');
    }
}
