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
        Schema::create('appoinment', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('comment');

            $table->unsignedBigInteger('fk_id_status')->nullable();
            $table->foreign("fk_id_status")
                ->references("id")
                ->on("status");

            $table->unsignedBigInteger('fk_id_user')->nullable();
            $table->foreign("fk_id_user")
                ->references("id")
                ->on("user");

            $table->unsignedBigInteger('fk_id_client')->nullable();
            $table->foreign("fk_id_client")
                ->references("id")
                ->on("client");

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
        Schema::dropIfExists('appoinment');
    }
};
