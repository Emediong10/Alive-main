<?php

use App\Models\User;
use App\Models\SpiritualGift;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spiritual_gift_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SpiritualGift::class);
            $table->foreignIdFor(User::class);
            
            
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
        Schema::dropIfExists('spiritual_gift_user');
    }
};
