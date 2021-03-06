<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64)->unique();
            $table->string('slug')->unique();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('image');
            $table->string('video')->nullable();
            $table->string('content', 2048);
            $table->string('slug')->unique();
            $table->string('meta_descr');
            $table->string('page_title');
			$table->integer('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->timestamps();
        });
        DB::table('categorias')->insert([
			'name' => 'Sin Definir',
			'slug' => 'sin-definir'
		]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
        Schema::drop('categorias');
    }
}
