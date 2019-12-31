<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('level_id')->default('0');
            $table->integer('image_id')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('referer');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('state');
            $table->string('address')->nullable();
            $table->string('nokname')->nullable();
            $table->string('nokmobile')->nullable();
            $table->string('accname');
            $table->string('accnum');
            $table->string('payopt')->nullable();
            $table->string('feename');
            $table->string('slipnum');
            $table->string('prefbank')->nullable();
            $table->string('balance')->default(0);
            $table->string('bank');
            $table->string('left')->nullable();
            $table->string('right')->nullable();
            $table->integer('is_active')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
