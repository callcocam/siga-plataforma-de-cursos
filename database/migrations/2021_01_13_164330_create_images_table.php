<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('file', 255)->default('defaults/no_image.jpg');
            $table->string('slug', 255)->unique();
            $table->string('name', 255)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('mime_type', 50)->default('image/jpeg')->nullable();
            $table->string('disk', 255)->default(config('laravel-livewire-forms.storage_disk','public'));
            $table->uuidMorphs('imageable');
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
        Schema::dropIfExists('images');
    }
}
