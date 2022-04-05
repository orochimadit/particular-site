<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSubscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_subscribes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_id');
            $table->unsignedBigInteger('subscribers_id');
            $table->foreign('site_id')->references('id')->on('sites')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('subscribers_id')->references('id')->on('subscribers')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('site_subscribes');
    }
}
