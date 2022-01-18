<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->string('storage_type');
            $table->integer('storage_size');
            $table->timestamp('purchase_date')->nullable();
            $table->foreignId('type_id')->nullable()->constrained()->onDelete('set null');
            $table->softDeletes();
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
        Schema::dropIfExists('consoles');
    }
}
