<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('role_id');
            $table->integer('file_id')->nullable();
            $table->string('file_link')->nullable();
            $table->string('slug_url')->unique();
            $table->string('title')->unique();
            $table->string('meta_link')->nullable();
            $table->string('author')->nullable();
            $table->text('excerpt');
            $table->longText('content');
            $table->integer('category_id');
            $table->string('label')->nullable();
            $table->string('published_on')->nullable();
            $table->string('location')->nullable();
            $table->enum('status', ['Active', 'Inactive']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
