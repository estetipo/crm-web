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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('url_image');
            $table->string('contact_email');
            $table->string('contact_phone');
            
            $table->unsignedBigInteger('fk_id_address')->nullable();
            $table->foreign("fk_id_address")
                ->references("id")
                ->on("address");

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
        Schema::dropIfExists('client');
    }
};
