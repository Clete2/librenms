<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAvailabilityPercColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('availability', function (Blueprint $table) {
            $table->double('availability_perc', 9, 6)->default(0.000000)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('availability', function (Blueprint $table) {
            $table->double('availability_perc', 6, 6)->default(0.000000)->change();
        });
    }
}
