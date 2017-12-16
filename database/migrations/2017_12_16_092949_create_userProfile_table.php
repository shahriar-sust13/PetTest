<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userProfile', function (Blueprint $table) {
            $table->text('intro');
            $table->string('facebookLink',100);
            $table->string('TwitterLink',100);
            $table->integer('userId');
            $table->integer('mobileNo');
            $table->string('currentProfileImagePath',100);
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
        Schema::dropIfExists('userProfile');
    }
}
