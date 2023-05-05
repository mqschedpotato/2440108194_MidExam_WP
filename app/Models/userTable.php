<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up(){
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string(name);
        $table->string(level);
        $table->string(star);
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
Schema::dropIfExists('users');
}
}
