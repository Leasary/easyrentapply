<?php

use App\Slugger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rentals', function (Blueprint $table) {
            $table->string('slug')->default('');
        });

        foreach(\App\Rental::all() as $rental) {
            $rental->slug = \Illuminate\Support\Str::uuid()->serialize();
            $rental->save();
        }

        Schema::table('rentals', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rentals', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
