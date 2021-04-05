<?php

use App\Models\Pack;
use App\Models\PaidPack;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackPaidPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_paid_pack', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pack::class);
            $table->foreign('pack_id')
                ->references('id')
                ->on('packs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // $table->foreignIdFor(PaidPack::class);
            // $table->foreign('paid_pack_id')
            //     ->references('id')
            //     ->on('paid_packs')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('pack_paid_pack');
    }
}
