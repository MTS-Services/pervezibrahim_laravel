<?php

namespace App\Livewire\Backend\Admin\ContactForm;

use App\Enums\ActiveInactive;
use App\Models\Admin;
use App\Models\ContactForm;
use App\Traits\Livewire\WithDataTable;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Index extends Component
{
    use WithDataTable, WithNotification;

    public $statusFilter = '';
    public $showDeleteModal = false;
    public $deleteId = null;
    public $bulkAction = '';
    public $showBulkActionModal = false;

    protected $listeners = ['userCreated' => '$refresh', 'userUpdated' => '$refresh'];

    public function render()
    {
        $datas = ContactForm::paginate(10);

        $columns = [
            [
                'key' => 'name',
                'label' => 'Name',
                'sortable' => true
            ],
            [
                'key' => 'organization',
                'label' => 'Organization',
                'sortable' => true
            ],
            [
                'key' => 'email',
                'label' => 'Email',
                'sortable' => true
            ],
            [
                'key' => 'is_receive_email',
                'label' => 'Receive Email',
                'format' => function ($data) {
                    return $data->is_receive_email ? 'Yes' : 'No';
                },
                'sortable' => true
            ],
            [
                'key' => 'created_at',
                'label' => 'Created',
                'sortable' => true,
                'format' => function ($data) {
                    return $data->created_at_formatted;
                }
            ],
            [
                'key' => 'created_by',
                'label' => 'Created By',
                'format' => function ($data) {
                    return optional($data->creater)->name
                        ? '<span class="text-sm font-medium text-gray-900 dark:text-gray-100">' . e($data->creater->name) . '</span>'
                        : '<span class="text-sm text-gray-500 dark:text-gray-400 italic">System</span>';
                },
                'sortable' => true,
            ],
        ];

        $actions = [
            [
                'key' => 'id',
                'label' => 'View',
                'route' => 'admin.contact-form.view',
                'encrypt' => true
            ],
            [
                'key' => 'id',
                'label' => 'Delete',
                'method' => 'confirmDelete',
                'encrypt' => true
            ],
        ];

        $bulkActions = [
            ['value' => 'delete', 'label' => 'Delete'],
            ['value' => 'activate', 'label' => 'Activate'],
            ['value' => 'inactive', 'label' => 'Inactive'],
        ];

        return view('livewire.backend.admin.contact-form.index', [
            'datas' => $datas,
            'columns' => $columns,
            'actions' => $actions,
            'bulkActions' => $bulkActions,
        ]);
    }

    public function confirmDelete($encryptedId): void
    {
        $this->deleteId = decrypt($encryptedId);
        $this->showDeleteModal = true;
    }

    public function delete(): void
    {
        try {
            if (!$this->deleteId) {
                return;
            }

            $this->service->deleteData(encrypt($this->deleteId));

            $this->showDeleteModal = false;
            $this->deleteId = null;

            $this->success('Data deleted successfully');
        } catch (\Throwable $e) {
            Log::error('Failed to delete user', [
                'user_id' => $this->deleteId,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to delete user.');
        }
    }

    public function resetFilters(): void
    {
        $this->reset(['search', 'statusFilter', 'perPage', 'sortField', 'sortDirection', 'selectedIds', 'selectAll', 'bulkAction']);
        $this->resetPage();
    }

    public function confirmBulkAction(): void
    {
        if (empty($this->selectedIds) || empty($this->bulkAction)) {
            $this->warning('Please select Datas and an action');
            Log::info('No Datas selected or no bulk action selected');
            return;
        }

        $this->showBulkActionModal = true;
    }

    public function executeBulkAction(): void
    {
        $this->showBulkActionModal = false;

        try {
            match ($this->bulkAction) {
                'delete' => $this->bulkDelete(),
                'activate' => $this->bulkUpdateStatus(ActiveInactive::ACTIVE),
                'inactive' => $this->bulkUpdateStatus(ActiveInactive::INACTIVE),
                default => null,
            };

            $this->selectedIds = [];
            $this->selectAll = false;
            $this->bulkAction = '';
        } catch (\Exception $e) {
            $this->error('Bulk action failed: ' . $e->getMessage());
        }
    }

    // protected function bulkDelete(): void
    // {
    //     $count = $this->service->bulkDeleteData(ids: $this->selectedIds, actioner: [
    //         'id' => admin()->id,
    //         'type' => Admin::class,
    //     ]);

    //     $this->success("{$count} Datas deleted successfully");
    // }

    // protected function bulkUpdateStatus(ActiveInactive $status): void
    // {
    //     $count = $this->service->bulkUpdateStatus(ids: $this->selectedIds, status: $status, actioner: [
    //         'id' => admin()->id,
    //         'type' => Admin::class,
    //     ]);
    //     $this->success("{$count} Datas updated successfully");
    // }

    protected function getFilters(): array
    {
        return [
            'search' => $this->search,
            'status' => $this->statusFilter,
            'sort_field' => $this->sortField,
            'sort_direction' => $this->sortDirection,
        ];
    }

    protected function getSelectableIds(): array
    {
        $ids =  $this->service->getAllData()->pluck('id')->toArray();
        return $ids;
    }

    public function updatedStatusFilter(): void
    {
        $this->resetPage();
    }
}