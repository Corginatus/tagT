<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->nullable()->constrained();
            $table->string('title')->nullable();
//            $table->foreignId('language_id')->constrained();
            $table->text('language')->nullable();
            $table->string('client')->nullable();
            $table->date('date')->nullable();
            $table->text('type')->nullable();
            $table->text('industry')->nullable();
            $table->text('website')->nullable();
            $table->text('increase_traffic')->nullable();
            $table->text('problem')->nullable();
            $table->text('solution')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
