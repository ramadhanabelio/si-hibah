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
        Schema::create('submission_validations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained()->onDelete('cascade');

            $table->boolean('valid_proposal')->default(false);
            $table->boolean('valid_deed')->default(false);
            $table->boolean('valid_npwp')->default(false);
            $table->boolean('valid_account_book')->default(false);
            $table->boolean('valid_rab')->default(false);
            $table->boolean('valid_photo')->default(false);

            $table->boolean('valid_name_institution')->default(false);
            $table->boolean('valid_name_manager')->default(false);
            $table->boolean('valid_address')->default(false);
            $table->boolean('valid_subdistrict')->default(false);
            $table->boolean('valid_ward_village')->default(false);
            $table->boolean('valid_category')->default(false);
            $table->boolean('valid_type')->default(false);

            $table->boolean('subst_goal')->default(false);
            $table->boolean('subst_benefit')->default(false);
            $table->boolean('subst_timeline')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_validations');
    }
};
