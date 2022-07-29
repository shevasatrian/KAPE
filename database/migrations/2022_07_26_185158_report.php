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
       // {{-- noPO,tglPO,segmen,namaPkj,statusPkj,ppn --}}
        Schema::create('tambahPO', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('noPO');
            $table->date('tglPO');
            $table->string('segmen');
            $table->string('namaPkj');
            $table->string('statusPkj');
            $table->bigInteger('ppn');
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
        Schema::dropIfExists('tambahPO');
    }
};
