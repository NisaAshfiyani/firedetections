<?php
// database/migrations/xxxx_xx_xx_create_detections_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetectionsTable extends Migration
{
    public function up()
    {
        Schema::create('detections', function (Blueprint $table) {
            $table->id();
            $table->binary('image'); // Menyimpan gambar dalam format binary
            $table->string('description');
            $table->timestamp('timestamp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detections');
    }
}
