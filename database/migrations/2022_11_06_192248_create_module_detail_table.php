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
        Schema::create('module_detail', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('time');
            $table->double('cost',8,2);

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
        Schema::dropIfExists('module_detail');
    }
};
