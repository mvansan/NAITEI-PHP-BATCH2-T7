@extends('components.admin.layout')

@section('content')
    <div class="p-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <div
            class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
            <div class="w-full mb-1">
                <div class="mb-4">
                    {{-- Include the breadcrumb component --}}
                    @include('admin.partials.breadcrumb', ['current' => 'List'])
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
                </div>
                {{-- Include the search and action buttons component --}}
                @include('admin.partials.search-and-actions')
            </div>

        </div>

        {{-- Error alert component --}}
        @include('admin.partials.error-alert')

        {{-- User table component --}}
        <x-user-table :users="$users"/>

        <!-- Add User Modal -->
        <x-add-user-modal/>

        {{-- Modals --}}
        @foreach ($users as $user)
            <x-edit-user-modal :user="$user"/>
            <x-delete-user-modal :user="$user"/>
        @endforeach
    </div>
@endsection

