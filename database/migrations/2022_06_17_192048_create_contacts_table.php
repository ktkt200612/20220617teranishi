<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('last_name')->nullable(false);
            $table->string('first_name')->nullable(false);
            $table->tinyInteger ('gender')->unsigned()->nullable(false);
            $table->string('email')->nullable(false); 
            $table->char ('postcode')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('building_name')->nullable(true);
            $table->text('opinion')->nullable(false);
            $table->datetime('created_at')->nullable(true);
            $table->datetime('updated_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
