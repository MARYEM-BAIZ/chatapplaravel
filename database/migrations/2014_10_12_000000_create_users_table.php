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
            $table->string('name');

            $table->unsignedBigInteger('idgroupe');
            $table->foreign('idgroupe')
            ->references('id')
            ->on('groupes')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('idtypeuser');
            $table->foreign('idtypeuser')
            ->references('id')
            ->on('typeusers')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
