<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//make table
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id');
            $table-> string('task');
            $table->boolean('isCompleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()// use exstising table
    {
        Schema::dropIfExists('tasks');
    }
}
