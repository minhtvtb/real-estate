<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnForTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('sub_body_1')->nullable()->after('body');
            $table->text('sub_body_2')->nullable()->after('sub_body_1');
            $table->string('location')->nullable()->after('sub_body_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('sub_body_1');
            $table->dropColumn('sub_body_2');
            $table->dropColumn('location');
        });
    }
}
