<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('candidate_id')->index()->comment('AUTO INCREMENT');
            $table->string('candidate_name',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('state',255)->nullable();
            $table->string('zip_code',10)->nullable();
            $table->string('country',255)->nullable();
            $table->string('mobile_no',10)->nullable();
            $table->string('candidate_email',255)->unique();
            $table->string('tax_file_number',255)->nullable();
            $table->string('abn_number',255)->nullable();
            $table->string('own_vehicle',5)->nullable();
            $table->string('visa_status',5)->nullable();
            $table->string('fin_name',255)->nullable();
            $table->string('fin_mobile',10)->nullable();
            $table->string('relationship_name',255)->nullable();
            $table->text('fin_address')->nullable();
            $table->string('account_name',255)->nullable();
            $table->string('institution',255)->nullable();
            $table->string('account_number',255)->nullable();
            $table->string('account_bsb',255)->nullable();
            $table->string('fund_details',255)->nullable();
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
        Schema::dropIfExists('candidates');
    }
};
