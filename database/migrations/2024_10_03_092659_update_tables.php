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
        if(Schema::hasTable('permissions')){
            Schema::table('permissions', function (Blueprint $table) {
                $table->string('guard_name')->nullable()->change();
            });
        }
        if(Schema::hasTable('roles')){
            Schema::table('roles', function (Blueprint $table) {
                $table->string('guard_name')->nullable()->change();
            });
        }
        if(Schema::hasTable('roles')){
            Schema::table('roles', function (Blueprint $table) {
               $table->unsignedBigInteger('idRole');
               $table->foreign('idRole')->references('id')->on('roles');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
