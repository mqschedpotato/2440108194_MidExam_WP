<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up(){
    Schema::create('transaction', function (Blueprint $table) {
        $table->id();
        $table->foreignId("usersId")->constrained(users)->onDelete('cascade');
        $table->foreignId("coffeeId")->constrained(coffee)->onDelete('cascade');
        $table->string(date);
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
Schema::dropIfExists('transaction');
}
}
