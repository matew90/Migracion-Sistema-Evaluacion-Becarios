<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->uuid('rec_uID');
            $table->foreignUuid('us_uID');
            $table->foreignUuid('rol_uID');
            $table->foreignUuid('sch_uID');
            $table->foreignUuid('conv_uID');
            $table->foreignUuid('created_by')->nullable();
            $table->foreignUuid('updated_by')->nullable(); 
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
        Schema::dropIfExists('records');
    }
}
