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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->decimal('harga', 15, 2);
            $table->foreignId('kategori_id');
            $table->string('img_name1');
            $table->string('img_name2');
            $table->string('img_name3');
            $table->string('img_name4');
            $table->text('desc');
            $table->text('spec');
            $table->timestamp('published_at');
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
        Schema::dropIfExists('produks');
    }
};
