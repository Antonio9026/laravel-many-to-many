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
        Schema::create('project_technology', function (Blueprint $table) {
                // foreign key di projects
                $table->unsignedBigInteger("project_id");
                // foreign key 
                $table->foreign("project_id")->references("id")->on("projects");
    
                 // foreign key di technology
                 $table->unsignedBigInteger("technology_id");
                 // foreign key 
                 $table->foreign("technology_id")->references("id")->on("technologies");
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
