<?php

use App\Traits\AuditColumnsTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use AuditColumnsTrait, SoftDeletes;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banner_videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sort_order')->default(0);

            $table->string('thumbnail')->nullable();
            $table->string('file')->nullable();
            $table->string('title');
            $table->string('action')->nullable();

            $table->string('footer_thumbnail')->nullable();
            $table->string('footer_file')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $this->addAdminAuditColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_videos');
         
    }
};
