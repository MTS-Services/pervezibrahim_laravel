<?php

use App\Enums\ActiveInactive;
use App\Traits\AuditColumnsTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use AuditColumnsTrait;

    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sort_order')->default(0);

            $table->string('page');
            $table->string('status')->default(ActiveInactive::ACTIVE->value);

            $table->string('thumbnail')->nullable();
            $table->string('file');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('action')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $this->addAdminAuditColumns($table);
            
            $table->index('page');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
