<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreatmentsTables extends Migration
{
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            $table->text('description')->nullable();
            $table->text('subtitle')->nullable();
            
            $table->integer('position')->unsigned()->nullable();

            $table->string('type')->nullable();

            $table->string('btn_title')->nullable();

            $table->integer('page_id')->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('treatment_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'treatment');
        });
    }

    public function down()
    {
        Schema::dropIfExists('treatment_revisions');
        Schema::dropIfExists('treatments');
    }
}
