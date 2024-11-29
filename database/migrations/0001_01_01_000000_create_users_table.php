<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            $table->string('staff_id')->unique();
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('designation_id')->unsigned()->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->longText('password_text')->nullable();
            
            $table->tinyInteger('gender')->comment('1 Male, 2 Female & 3 Other');
            $table->date('dob');
            $table->date('joining_date')->nullable();
            $table->date('ending_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('emergency_phone')->nullable();
            
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->tinyInteger('marital_status')->nullable();
            $table->tinyInteger('blood_group')->nullable();
            $table->string('nationality')->nullable();
            $table->string('national_id')->nullable();
            $table->string('passport_no')->nullable();
            
            $table->string('country')->nullable();
            $table->integer('present_state')->unsigned()->nullable();
            $table->integer('present_district')->unsigned()->nullable();
            $table->text('present_village')->nullable();
            $table->text('present_address')->nullable();
            $table->integer('permanent_state')->unsigned()->nullable();
            $table->integer('permanent_district')->unsigned()->nullable();
            $table->text('permanent_village')->nullable();
            $table->text('permanent_address')->nullable();

            $table->string('education_level')->nullable();
            $table->string('graduation_academy')->nullable();
            $table->string('year_of_graduation')->nullable();
            $table->string('graduation_field')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('note')->nullable();

            $table->double('basic_salary',10,2)->default('0');
            $table->tinyInteger('contract_type')->default('1')->comment('1 Full Time & 2 Part Time');
            $table->integer('work_shift')->unsigned()->nullable();
            $table->tinyInteger('salary_type')->default('1')->comment('1 Fixed & 2 Hourly');
            $table->text('epf_no')->nullable();

            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_brach')->nullable();
            $table->string('tin_no')->nullable();

            $table->text('photo')->nullable();
            $table->text('signature')->nullable();
            $table->text('resume')->nullable();
            $table->text('joining_letter')->nullable();
            
            $table->boolean('is_admin')->default('0');
            $table->boolean('login')->default('1');
            $table->tinyInteger('status')->default('1')->comment('0 Inactive, 1 Active');
            $table->rememberToken();
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
