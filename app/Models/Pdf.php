<?php

namespace App\Models;

use App\Enums\PdfPage;
use App\Enums\ActiveInactive;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = [
        'sort_order',

        'cover_image',
        'file',
        'title',
        'description',
        'page',
        'status',
        'is_featured',
        'action',

        'created_by',
        'updated_by',
        'deleted_by',

        //here AuditColumns 
    ];

    protected $hidden = [
        //
    ];

    protected $casts = [
        'status' => ActiveInactive::class,
        'page' => PdfPage::class,
    ];

    /* =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
                Start of RELATIONSHIPS
     =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#= */

    //

    /* =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
                End of RELATIONSHIPS
     =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#= */
    public function getStatusLabelAttribute(): string
    {
        return $this->status->label();
    }

    public function getStatusColorAttribute(): string
    {
        return $this->status->color();
    }
    public function getCreatedAtFormattedAttribute(): string
    {
        return dateTimeFormat($this->attributes['created_at']);
    }

    public function getCoverImageUrlAttribute(): ?string
    {
        return $this->cover_image ? asset('storage/' . $this->cover_image) : null;
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->appends = array_merge(parent::getAppends(), [
            //
        ]);
    }

    /* =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
                Start of Scopes
     =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#= */

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query
            ->when(
                $filters['status'] ?? null,
                fn($q, $status) =>
                $q->where('status', $status)
            )
            ->when(
                $filters['code'] ?? null,
                fn($q, $code) =>
                $q->where('code', 'like', "%{$code}%")
            )
            ->when(
                $filters['is_default'] ?? null,
                fn($q, $isDefault) =>
                $q->where('is_default', $isDefault)
            )
            ->when(
                $filters['page'] ?? null,
                fn($q, $page) =>
                $q->where('page', $page)
            );
    }

    public function scopeActive($query)
    {
        return $query->where('status', ActiveInactive::ACTIVE);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', ActiveInactive::INACTIVE);
    }
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
    public function scopeNotFeatured($query)
    {
        return $query->where('is_featured', 0);
    }
    public function scopePdfPage($query, PdfPage $page)
    {
        return $query->where('page', $page);
    }

    /* =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
                End of Scopes
     =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#= */
}
