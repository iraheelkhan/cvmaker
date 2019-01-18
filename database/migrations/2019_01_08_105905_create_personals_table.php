<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('address_1')->nullabe();
            $table->text('address_2')->nullabe();
            $table->text('city_name')->nullabe();
            $table->integer('postal_code')->nullabe();
            $table->text('country')->nullabe();
            $table->string('email');
            $table->text('phone')->nullabe();
            $table->integer('age')->nullabe();
            $table->date('date_of_birth')->nullabe();
            $table->string('website')->nullabe();
            $table->string('picture')->nullable();
            $table->string('objective')->nullable();
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
        Schema::dropIfExists('personals');
    }
}
