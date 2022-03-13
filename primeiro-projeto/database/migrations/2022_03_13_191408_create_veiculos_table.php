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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nome_cliente');
            $table->string('senha');
            $table->string('contra_senha');
            $table->string('placa');
            $table->string('cor');
            $table->string('marca');
            $table->string('modelo');
            $table->enum('status',["ativo","inativo"]);
            $table->timestamp('failed_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
};
