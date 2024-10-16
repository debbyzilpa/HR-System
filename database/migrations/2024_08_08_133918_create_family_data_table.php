<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDataTable extends Migration
{
    public function up()
    {
        Schema::create('family_data', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key for family_data
            $table->bigInteger('id_number'); // Foreign key to employees table
            $table->string('mate_name')->nullable();
            $table->string('child_name')->nullable();
            $table->date('wedding_date')->nullable();
            $table->string('marriage_certificate_number')->nullable();
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('id_number')->references('id_number')->on('employees')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('family_data');
    }
}
