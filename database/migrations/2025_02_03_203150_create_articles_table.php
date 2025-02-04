<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('Title', 1000);
            $table->string('Image', 255)->charset('latin1')->collation('latin1_swedish_ci');
            $table->string('HeaderImage', 255)->charset('latin1')->collation('latin1_swedish_ci');
            $table->mediumText('Introduction');
            $table->text('Description');
            $table->dateTime('LastMod')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('Language', 2);
            $table->string('KeyWords', 1000);
            $table->integer('State');
            $table->integer('NumVisit');
            $table->integer('IdTheme');
            $table->integer('IdUser');
            $table->integer('IdHost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
