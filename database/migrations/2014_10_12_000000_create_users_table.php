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
            $table->id();
            $table->foreignId('role_id');
			$table->string('workshop')->nullable();
			$table->string('avatar')->default('default.jpg');
            $table->string('name');
			$table->date('tanggal_lahir')->nullable();
			$table->string('tempat_lahir')->nullable();
			$table->string('gender')->nullable();
			$table->string('hp')->nullable();
			$table->string('pendidikan_terakhir')->nullable();
            $table->string('slug');
            $table->string('jabatan')->nullable();
            $table->string('sekolah')->nullable();
            $table->text('kabupaten')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
