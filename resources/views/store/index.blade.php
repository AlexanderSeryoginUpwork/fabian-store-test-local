<x-layouts.app>
        <table class="table table-bordered" id="orderTable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Additional Info</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
        </table>
    @push('scripts')
        <script>
            $(function() {
                $('#orderTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('datatables.store.data') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'Store Name' },
                        { data: 'additional_info', name: 'Additional Info' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'updated_at', name: 'updated_at' }
                    ]
                });
            });
        </script>
    @endpush
</x-layouts.app>
