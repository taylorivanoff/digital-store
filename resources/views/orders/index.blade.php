<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Orders
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
                @if ($orders->count())
                    @foreach ($orders as $order)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                        <div class="font-semibold mb-2">Order #{{ $order->id }}</div>
                        <div class="grid grid-cols-2">
                            @foreach ($order->products as $product)
                            <div class="mb-2 row">
                                {{ $product->title }}
                                <br>
                                <a class="text-indigo-500" href="{{ route('products.downloads.show', $product) }}">Download</a>
                            </div>
                            @endforeach
                            <div><span class="font-semibold">Total</span><br>@money($order->total())</div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p>You have no orders.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
