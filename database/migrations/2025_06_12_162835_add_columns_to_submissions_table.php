<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name_manager')->after('name_institution');
            $table->string('category')->after('name_manager');
            $table->string('ward_village')->after('subdistrict');
            $table->string('deed_of_establishment')->nullable()->after('proposal');
            $table->string('npwp')->nullable()->after('deed_of_establishment');
            $table->string('account_book')->nullable()->after('npwp');
            $table->string('rab_renovation')->nullable()->after('account_book');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn([
                'user_id',
                'name_manager',
                'category',
                'ward_village',
                'deed_of_establishment',
                'npwp',
                'account_book',
                'rab_renovation',
            ]);
        });
    }
};
