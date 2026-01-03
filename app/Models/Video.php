<?php

namespace App\Models;

use App\Enums\ActiveInactive;
use App\Enums\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends AuthBaseModel
{
    use SoftDeletes;
    //

    protected $fillable = [
        'sort_order',
        'page',
        'status',
        'thumbnail',
        'file',
        'title',
        'description',
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
        'page' => Page::class,
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

    public function getPageLabelAttribute(): string
    {
        return $this->page->label();
    }

    public function getThumbnailUrlAttribute(): string
    {
        return $this->thumbnail
            ? asset('storage/' . $this->thumbnail)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name);
    }

    public function getFileUrlAttribute(): string
    {
        return $this->file
            ? asset('storage/' . $this->file)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name);
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
    public function scopeOfPage($query, Page $page)
    {
        return $query->where('page', $page->value);
    }
    public function scopeHomeBanner($query)
    {
        return $query->where('page', Page::HOME_BANNER->value);
    }

    /* =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#=
                End of Scopes
     =#=#=#=#=#=#=#=#=#=#==#=#=#=#= =#=#=#=#=#=#=#=#=#=#==#=#=#=#= */
}
