<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('payment_mode_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('book_id')->unsigned();
            $table->string('remark');
            $table->decimal('amount');
            $table->decimal('cash_in');
            $table->decimal('cash_out');
            $table->text('attachment')->nullable();
            $table->date('transaction_date');
            $table->time('transaction_time');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('payment_mode_id')->references('id')->on('payment_modes')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_data');
    }
}
