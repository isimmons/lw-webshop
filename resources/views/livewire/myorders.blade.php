<x-panel title="My Orders" class="mt-12 max-w-lg mx-auto">
    <table class="w-full">
        <thead>
        <tr>
            <th class="text-left">Order</th>
            <th class="text-left">Ordered at</th>
            <th class="text-right">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($this->orders as $order)
            <tr>
                <td>
                    <a href="{{ route('order.show', $order->id) }}" class="underline font-medium">#{{ $order->id }}</a>
                </td>
                <td>{{ $order->created_at->diffForHumans() }}</td>
                <td class="text-right">
                    {{ $order->amount_total }}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</x-panel>
