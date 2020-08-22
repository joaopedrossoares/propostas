<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firebase_id');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('full_name')->nullable();
            $table->string('payment_document')->nullable();
            $table->enum('type_registration_document', ['cpf', 'rg'])->nullable();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer');
    }
}
