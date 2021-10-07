<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cart
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                    @if (optional(optional($cart)->products)->count())
                        @foreach ($cart->products as $product)
                            <div class="p-4 grid-cols-3 grid">
                                <div class="font-semibold">
                                    {{ $product->title }}
                                </div>

                                <div>
                                    @money($product->price)
                                </div>

                                <form class="text-right" action="{{ route('cart.products.destroy', $product->slug) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <x-button type="submit" class="bg-red-500">Remove</x-button>
                                </form>
                            </div>
                        @endforeach
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                    <div class="font-semibold mb-2">Total</div>
                    <div class="mb-2">@money($cart->total())</div>
                    <x-link-button :href="route('checkout.index')">Checkout</x-link-button>
                </div>

                    
                @else
                    <p>Your cart is empty.</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
