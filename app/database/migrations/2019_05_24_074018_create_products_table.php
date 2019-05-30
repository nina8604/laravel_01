<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('sku');
			$table->string('name');
			$table->Integer ('cat_id')->unsigned();
			$table->text('description')->nullable();
			$table->float('price', 8, 2 );
			$table->Integer('stock');
			$table->string('image');

            $table->timestamps();

            $table->index('id');
            $table->index('sku');
            $table->index('name');
            $table->index('cat_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
