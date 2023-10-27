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
        Schema::table('consoles', function (Blueprint $table) {
            //! creo la colonna user_id con valore un numero intero senza segno
            $table->unsignedBigInteger('user_id')->after('description')->nullable();
            //! user_id è una chiave esterna che si riferisce all'id della tabella users
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consoles', function (Blueprint $table) {
            //! sciogliamo il vincolo della chiave esterna
            $table->dropForeign(['user_id']);
            //! elimino la colonna user_id
            $table->dropColumn('user_id');
        });
    }
};
