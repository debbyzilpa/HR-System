<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // Define id_number as primary key without auto-increment
            $table->bigInteger('id_number')->primary();
            $table->string('full_name');
            $table->string('nickname')->nullable();
            $table->date('contract_date');
            $table->date('work_date');
            $table->enum('status', ['Aktif', 'Berhenti']);
            $table->string('position');
            $table->string('nuptk')->nullable();
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->string('place_birth');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('email')->nullable();
            $table->string('hobby')->nullable();
            $table->enum('marital_status', ['Menikah', 'Belum']);
            $table->string('residence_address');
            $table->string('phone');
            $table->string('address_emergency')->nullable();
            $table->string('phone_emergency')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('last_education')->nullable();
            $table->string('agency')->nullable();
            $table->integer('graduation_year')->nullable();
            $table->string('competency_training_place')->nullable();
            $table->text('organizational_experience')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Add soft deletes for archived employees
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
