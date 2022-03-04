<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberShipPamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_ship_paments', function (Blueprint $table) {
            $table->id();

            $table->string('memberid')->nullable();
            $table->string('method')->nullable();
            $table->string('number')->nullable();
            $table->string('amount')->nullable();
            $table->string('TRXID')->nullable();

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
        Schema::dropIfExists('member_ship_paments');
    }
}
