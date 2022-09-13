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
    // public function up()
    // {
    //     Schema::create('device_states', function (Blueprint $table) {
    //         $table->id();
    //         $table->boolean('state');
    //         $table->index('device_id');
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('device_states', function (Blueprint $table) {
            $table->id();
            $table->boolean('state');
            $table->foreignIdFor(\App\Models\Devices::class, 'device_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('device_states');
    }
};
