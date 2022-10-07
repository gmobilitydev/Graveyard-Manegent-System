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
        Schema::create('graves', function (Blueprint $table) {
            $table->id();
            $table->foreignID('grave_type_id')->constrained()->onDelete('cascade');
            $table->foreignID('section_id')->constrained()->onDelete('cascade');

            $table->string('grave_number');
            $table->string('grave_key');
            $table->string('image')->nullable();

            $table->boolean('grave_status')->nullable()->default(false);

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
        Schema::dropIfExists('graves');
    }
};
