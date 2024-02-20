<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive_accounts', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('confirmed_password');
            $table->string('location')->nullable();
            $table->string('occupation')->nullable();
            $table->text('bio')->nullable();
            $table->boolean('certified_botanist')->default(false);
            $table->boolean('agree_terms')->default(false);
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
        Schema::dropIfExists('archive_accounts');
    }
};
