<?php

use App\Models\Pack;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaidPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paid_packs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            // $table->foreignIdFor(User::class);
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->foreignIdFor(Pack::class);
            $table->foreign('pack_id')
                ->references('id')
                ->on('packs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('duration')->default(36);
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
        Schema::dropIfExists('paid_packs');
    }
}
