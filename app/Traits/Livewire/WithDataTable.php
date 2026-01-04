<?php

namespace App\Traits\Livewire;

use App\Enums\PdfPage;
use Livewire\WithPagination;

trait WithDataTable
{
    use WithPagination;

    public $perPage = 15;
    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $selectedIds = [];
    public $selectAll = false;
    public string $page = PdfPage::CONTACT_US->value;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
        'sortField' => ['except' => 'created_at'],
        'sortDirection' => ['except' => 'desc'],
        'page' => ['except' => PdfPage::CONTACT_US->value],
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingPerPage(): void
    {
        $this->resetPage();
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function updatedSelectAll($value): void
    {
        if ($value) {
            $this->selectedIds = $this->getSelectableIds();
        } else {
            $this->selectedIds = [];
        }
    }

    public function updatedSelectedIds(): void
    {
        $this->selectAll = count($this->selectedIds) === count($this->getSelectableIds());
    }

    public function resetFilters(): void
    {
        $this->reset(['search', 'perPage', 'sortField', 'sortDirection', 'selectedIds', 'selectAll']);
        $this->resetPage();
    }

    protected function getSelectableIds(): array
    {
        return [];
    }
}