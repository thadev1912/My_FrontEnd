<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\DatabaseMigrations;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho', function ($collection) {
            $collection->index('ma_kho');
            $collection->index('ten_kho');
            $collection->index('lienhe');
            $collection->index('diachi');
            $collection->index('sdt');
            $collection->index('quanly');
            $collection->index('ghichu');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('kho');
    }
};
