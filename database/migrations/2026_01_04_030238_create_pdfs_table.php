<?php

use App\Enums\ActiveInactive;
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
        Schema::create('pdfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sort_order')->default(0);

            $table->string('cover_image')->nullable();
            $table->string('file')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('page')->nullable();
            $table->string('status')->default(ActiveInactive::ACTIVE->value);
            $table->boolean('is_featured')->default(false);

            $table->string('action')->nullable();

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
        Schema::dropIfExists('pdfs');
         
    }
};
