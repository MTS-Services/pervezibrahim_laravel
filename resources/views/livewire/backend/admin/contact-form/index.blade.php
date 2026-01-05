<section>
    
    {{-- Page Header --}}
    <div class="glass-card rounded-2xl p-4 lg:p-6 mb-6">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <h2 class="text-xl lg:text-2xl font-bold text-text-primary">
                {{ __('Contact Form List') }}
            </h2>
        </div>
    </div>

    {{-- Table Component --}}
    <x-ui.table :data="$datas" :columns="$columns" :actions="$actions" :bulkActions="$bulkActions" :selectedIds="$selectedIds" :mobileVisibleColumns="2" searchProperty="search" perPageProperty="perPage"
        :showBulkActions="true" emptyMessage="{{ __('No users found. Create your first user to get started.') }}" />

    {{-- Delete Confirmation Modal --}}
    <x-ui.confirmation-modal :show="'showDeleteModal'" title="{{ __('Delete this user?') }}"
        message="{{ __('Are you sure you want to remove this user?') }}" :method="'delete'"
        button-text="{{ __('Delete User') }}" />

    {{-- Bulk Action Confirmation Modal --}}
    <x-ui.confirmation-modal :show="'showBulkActionModal'" title="{{ __('Confirm Bulk Action') }}"
        message="{{ __('Are you sure you want to perform this action on ' . count($selectedIds) . ' selected user(s)?') }}"
        :method="'executeBulkAction'" button-text="{{ __('Confirm Action') }}" />
        {{-- @dd('What is this') --}}
</section>
