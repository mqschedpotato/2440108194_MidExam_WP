<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeeTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up(){
    Schema::create('coffee', function (Blueprint $table) {
        $table->id();
        $table->string(name);
        $table->string(category);
        $table->string(name);
        $table->string(price);
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
Schema::dropIfExists('coffee');
}
}
