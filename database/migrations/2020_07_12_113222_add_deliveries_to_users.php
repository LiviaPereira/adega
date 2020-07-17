<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeliveriesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // exemplo apenas
        // Schema::table('users', function (Blueprint $table) {
        //     $table->foreignId('deliveries_id')->nullable()->references('id')->on('deliveries');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    // exemplo apenas
    // Schema::table('users', function (Blueprint $table) {
    //     $table->dropForeign('users_deliveries_id_foreign');
    //     $table->dropColumn('deliveries_id');
    // });
}
}
