<?php

use App\Models\company;
use App\Models\employee;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
 $table->string('email', 45);
 $table->string('senha', 45);
 $table->foreignIdFor(company::class);
 $table->foreignIdFor(employee::class);
 $table->softDeletes();
 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
