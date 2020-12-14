@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="orderTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Store ID</th>
            <th>User ID</th>
            <th>Additional Info</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#orderTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatables.order.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'store_id', name: 'Store ID' },
                    { data: 'user_id', name: 'User ID' },
                    { data: 'additional_info', name: 'Additional Info' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });
    </script>
@endpush
