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
            $table->string('supplierId');
            $table->string('tokenType');
            $table->string('expiresIn');
            $table->mediumText('accessToken');
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
