<div style="">
    <div>
        Hello, {{ auth()->user()->name }}
    </div>
    @can('manage as admin')
        <span>
            <a href="/dashboard" style="border-bottom:1px dotted blue">Dashboard</a>
        </span>
    @endcan
    @canany(['manage as admin','manage as user'])
        &nbsp; | &nbsp;
        <span>
            <a href="{{ route('orders.getIndex') }}" style="border-bottom:1px dotted blue">Orders</a>
        </span>
       /
        <a href="{{ route('order.create.form') }}" class="bg-green-500 hover:bg-red-700">Create new Order</a>
    @endcanany
    @can('manage as admin')
        &nbsp; | &nbsp;
        <span>
            <a href="{{ route('stores.getIndex') }}" style="border-bottom:1px dotted blue">Stores</a>
        </span>
    /
        <a href="{{ route('store.create.form') }}" class="bg-red-500 hover:bg-red-700">Create new Store</a>
    @endcan
</div>
