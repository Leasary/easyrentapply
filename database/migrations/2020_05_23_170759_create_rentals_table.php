<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('password')->unique();

            $table->string('name');
            $table->string('email');

            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');

            $table->timestamps();
        });

        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('rental_id');
            $table->foreign('rental_id')->references('id')->on('rentals');

            $table->string('email');
            $table->string('password')->unique();

            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('phone');

            $table->string('social_security_number');
            $table->string('drivers_license_number');
            $table->string('drivers_license_state');

            $table->string('rh1_address');
            $table->string('rh1_city');
            $table->string('rh1_state');
            $table->string('rh1_zipcode');
            $table->string('rh1_rent');
            $table->string('rh1_rent_or_own');
            $table->string('rh1_landlord_name');
            $table->string('rh1_landlord_phone');
            $table->string('rh1_reason');

            $table->string('rh2_address');
            $table->string('rh2_city');
            $table->string('rh2_state');
            $table->string('rh2_zipcode');
            $table->string('rh2_rent');
            $table->string('rh2_rent_or_own');
            $table->string('rh2_landlord_name');
            $table->string('rh2_landlord_phone');
            $table->string('rh2_reason');

            $table->string('eh1_name');
            $table->string('eh1_position');
            $table->string('eh1_supervisor');
            $table->string('eh1_supervisor_phone');
            $table->string('eh1_income');
            $table->string('eh1_tenure');

            $table->string('eh2_name');
            $table->string('eh2_position');
            $table->string('eh2_supervisor');
            $table->string('eh2_supervisor_phone');
            $table->string('eh2_income');
            $table->string('eh2_tenure');

            $table->string('ref1_name');
            $table->string('ref1_phone');
            $table->string('ref1_relationship');

            $table->string('ref2_name');
            $table->string('ref2_phone');
            $table->string('ref2_relationship');

            $table->string('ref3_name');
            $table->string('ref3_phone');
            $table->string('ref3_relationship');

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
        Schema::dropIfExists('applications');
        Schema::dropIfExists('rentals');
    }
}
