<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('quy_mo_content')->after('slug')->nullable();
            $table->string('dien_tich')->after('quy_mo_content')->nullable();
            $table->string('so_tang_ham')->after('dien_tich')->nullable();
            $table->string('so_tang_noi')->after('so_tang_ham')->nullable();
            $table->string('tong_so_can_ho')->after('so_tang_noi')->nullable();
            $table->string('tt_title_1')->after('tong_so_can_ho')->nullable();
            $table->string('tt_title_2')->after('tt_title_1')->nullable();
            $table->string('tt_title_3')->after('tt_title_2')->nullable();
            $table->text('tt_content_1')->after('tt_title_3')->nullable();
            $table->text('tt_content_2')->after('tt_content_1')->nullable();
            $table->text('tt_content_3')->after('tt_content_2')->nullable();
            $table->string('tt_image')->after('tt_content_3')->nullable();
            $table->text('vi_tri')->after('tt_image')->nullable();
            $table->string('vi_tri_image')->after('vi_tri')->nullable();
            $table->text('tien_ich')->after('vi_tri_image')->nullable();
            $table->text('mat_bang')->after('tien_ich')->nullable();
            $table->string('mat_bang_image')->after('mat_bang')->nullable();
            $table->string('chinh_sach_1')->after('mat_bang_image')->nullable();
            $table->string('chinh_sach_2')->after('chinh_sach_1')->nullable();
            $table->string('chinh_sach_3')->after('chinh_sach_2')->nullable();
            $table->string('chinh_sach_4')->after('chinh_sach_3')->nullable();
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
            $table->dropColumn('quy_mo_content');
            $table->dropColumn('dien_tich');
            $table->dropColumn('so_tang_ham');
            $table->dropColumn('so_tang_noi');
            $table->dropColumn('tong_so_can_ho');
            $table->dropColumn('tt_title_1');
            $table->dropColumn('tt_title_2');
            $table->dropColumn('tt_title_3');
            $table->dropColumn('tt_content_1');
            $table->dropColumn('tt_content_2');
            $table->dropColumn('tt_content_3');
            $table->dropColumn('tt_image');
            $table->dropColumn('vi_tri');
            $table->dropColumn('vi_tri_image');
            $table->dropColumn('tien_ich');
            $table->dropColumn('mat_bang');
            $table->dropColumn('mat_bang_image');
            $table->dropColumn('chinh_sach_1');
            $table->dropColumn('chinh_sach_2');
            $table->dropColumn('chinh_sach_3');
            $table->dropColumn('chinh_sach_4');
        });
    }
}
