<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system', function (Blueprint $table) {
            $table->id();
            $table->string('system_name');
            $table->string('owner_first_name');
            $table->string('owner_last_name');
            $table->string('village');
            $table->string('parish');
            $table->string('subcounty');
            $table->string('district');
            $table->string('date_of_installation');
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
        Schema::dropIfExists('system');
    }
}
