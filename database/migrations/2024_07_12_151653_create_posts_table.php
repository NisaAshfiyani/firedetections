<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('youtube_url');
        $table->text('content');
        $table->text('content_1')->nullable();
        $table->text('content_2')->nullable();
        $table->text('content_3')->nullable();
        $table->text('content_4')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
{
    Schema::dropIfExists('posts');
}

};