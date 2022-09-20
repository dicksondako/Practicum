<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKekeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keke_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id');
            $table->string(column: 'location');
            $table->foreignId(column: 'keke_user');
            $table->string(column: 'status')->default(true);
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
        Schema::dropIfExists('keke_orders');
    }
}
