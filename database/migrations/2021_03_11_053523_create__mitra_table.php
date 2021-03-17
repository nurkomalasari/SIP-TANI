<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable()->default('text');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->date('tanggal_lahir');
            $table->string('noKtp', 100)->nullable()->default('text');
            $table->string('alamat', 100)->nullable()->default('text');
            $table->string('noHp', 100)->nullable()->default('text');
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
        Schema::dropIfExists('Mitra');
    }
}
