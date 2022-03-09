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

            $table->string('name')->nullable();
            $table->string('brance_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_Number')->nullable();
            $table->string('Payment_Date')->nullable();
            $table->string('Slip_Upload')->nullable();
            $table->string('Emergency')->nullable();

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
