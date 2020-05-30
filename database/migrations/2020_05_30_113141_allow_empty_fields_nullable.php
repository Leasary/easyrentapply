<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllowEmptyFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach(\App\Application::all() as $application) {
            $application->social_security_number = encrypt($application->social_security_number);
            $application->save();
        }

        Schema::table('applications', function (Blueprint $table) {
            $table->string('social_security_number')->nullable()->change();

            $table->string('rh2_address')->nullable()->change();
            $table->string('rh2_city')->nullable()->change();
            $table->string('rh2_state')->nullable()->change();
            $table->string('rh2_zipcode')->nullable()->change();
            $table->string('rh2_rent')->nullable()->change();
            $table->string('rh2_rent_or_own')->nullable()->change();
            $table->string('rh2_landlord_name')->nullable()->change();
            $table->string('rh2_landlord_phone')->nullable()->change();
            $table->string('rh2_reason')->nullable()->change();

            $table->string('eh2_name')->nullable()->change();
            $table->string('eh2_position')->nullable()->change();
            $table->string('eh2_supervisor')->nullable()->change();
            $table->string('eh2_supervisor_phone')->nullable()->change();
            $table->string('eh2_income')->nullable()->change();
            $table->string('eh2_tenure')->nullable()->change();

            $table->string('ref2_name')->nullable()->change();
            $table->string('ref2_phone')->nullable()->change();
            $table->string('ref2_relationship')->nullable()->change();

            $table->string('ref3_name')->nullable()->change();
            $table->string('ref3_phone')->nullable()->change();
            $table->string('ref3_relationship')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->string('social_security_number')->change();

            $table->string('rh2_address')->change();
            $table->string('rh2_city')->change();
            $table->string('rh2_state')->change();
            $table->string('rh2_zipcode')->change();
            $table->string('rh2_rent')->change();
            $table->string('rh2_rent_or_own')->change();
            $table->string('rh2_landlord_name')->change();
            $table->string('rh2_landlord_phone')->change();
            $table->string('rh2_reason')->change();

            $table->string('eh2_name')->change();
            $table->string('eh2_position')->change();
            $table->string('eh2_supervisor')->change();
            $table->string('eh2_supervisor_phone')->change();
            $table->string('eh2_income')->change();
            $table->string('eh2_tenure')->change();

            $table->string('ref2_name')->change();
            $table->string('ref2_phone')->change();
            $table->string('ref2_relationship')->change();

            $table->string('ref3_name')->change();
            $table->string('ref3_phone')->change();
            $table->string('ref3_relationship')->change();
        });
    }
}
