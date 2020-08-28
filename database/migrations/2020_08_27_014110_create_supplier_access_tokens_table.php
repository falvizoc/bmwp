<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('supplier_id');
            $table->string('token_type');
            $table->string('expires_in');
            $table->mediumText('access_token');
            $table->boolean('is_valid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_access_tokens');
    }
}
