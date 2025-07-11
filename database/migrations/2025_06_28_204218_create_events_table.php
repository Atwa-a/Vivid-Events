<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->text('description')->nullable();
        $table->date('date')->nullable();
        $table->timestamps();
    });
}


    public function down(): void {
        Schema::dropIfExists('events');
    }
};
