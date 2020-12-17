<x-layouts.app>

        <table class="table table-bordered" id="orderTable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Store ID</th>
                <th>User ID</th>
                <th>Additional Info</th>
                @can('manage as admin')
                    <th>Status</th>
                @endcan
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->store_id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->additional_info }}</td>
                    @can('manage as admin')
                        <td>
                            <select>
                                @foreach($statuses as $status)
                                    <option
                                        value="{{ $order->status }}"
                                        selected="{{ $order->status == $status->id }}"
                                    >
                                        {{ $status->title }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                    @endcan
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>



    @push('scripts')
       {{-- <script>
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
        </script>--}}
    @endpush
</x-layouts.app>
