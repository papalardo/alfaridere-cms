<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTables extends Migration
{
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->nullableMorphs('slideable');
        });

        Schema::create('slider_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'slider');
        });
    }

    public function down()
    {
        Schema::dropIfExists('slider_revisions');
        Schema::dropIfExists('sliders');
    }
}
