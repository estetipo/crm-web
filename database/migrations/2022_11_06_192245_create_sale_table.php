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
        Schema::create('sale', function (Blueprint $table) {
            $table->id();
            $table->date('delivery_date');
            $table->date('register_date');

            $table->unsignedBigInteger('fk_id_type')->nullable();
            $table->foreign("fk_id_type")
                ->references("id")
                ->on("sale_type");

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
        Schema::dropIfExists('sale');
    }
};
