<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('memberId')->nullable();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('dob')->nullable();
            $table->string('father_name')->nullable();
            $table->string('Spouse_name')->nullable();
            $table->string('education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('pr_vill')->nullable();
            $table->string('pr_post')->nullable();
            $table->string('pr_thana')->nullable();
            $table->string('pr_dist')->nullable();
            $table->string('p_vill')->nullable();
            $table->string('p_post')->nullable();
            $table->string('p_thana')->nullable();
            $table->string('p_dist')->nullable();
            $table->string('Present_address')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('phoneNumber2')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('pesahgot_address')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('samagik_unoyon')->nullable();
            $table->string('hobby')->nullable();
            $table->string('fee')->nullable();
            $table->longText('image')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('members');
    }
}
