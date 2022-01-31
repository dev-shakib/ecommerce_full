@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', 'Support')

    <li class="active">{{ 'Support' }}</li>
@endcomponent

@component('admin::components.page.index_table')

    <div class="table-responsive">
        <table class="table table-striped table-hover " id="support-table">
            <thead>
                <tr>

                    <th data-sort>{{ __('id') }}</th>
                    <th>{{ __('First Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Time') }}</th>
                    <th>{{ __('Action') }}</th>

                </tr>
            </thead>


        </table>
    </div>


@endcomponent




@push('scripts')
    <script>

$(function () {

var table = $('#support-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('admin.support.index') }}",
    columns: [
        { data: 'id', name: 'id', width: '5%' },
        { data: 'f_name', name: 'f_name', orderable: false, defaultContent: '' },
        { data: 'email', name: 'email' },
        { data: 'phone', name: 'phone' },
        { data: 'status', name: 'status' },
        { data: 'time', name: 'time' },
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});
});
    </script>
@endpush
