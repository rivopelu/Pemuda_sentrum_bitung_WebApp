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
        Schema::create('info_tag', function (Blueprint $table) {
            $table->integer('info_id')->constrained('infos');
            $table->integer('tag_id')->constrained('tags');
            $table->primary(['info_id', 'tag_id']);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_tag');
    }
};
