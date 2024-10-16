<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_number');
            $table->foreign('id_number')->references('id_number')->on('employees')->onDelete('cascade');
            $table->string('offense_type');
            $table->date('offense_date');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_records');
    }
}
